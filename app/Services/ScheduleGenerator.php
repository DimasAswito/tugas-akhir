<?php

namespace App\Services;

use App\Models\Dosen;
use App\Models\Hari;
use App\Models\Jam;
use App\Models\MataKuliah;
use App\Models\Ruangan;
use Illuminate\Support\Collection; // <-- Tambahkan ini

class ScheduleGenerator
{
    // --- Properti untuk parameter algoritma ---
    private int $NP = 50; // Jumlah populasi (solusi) yang akan dibangkitkan
    private int $maxCycles = 200; // Jumlah siklus/iterasi utama algoritma
    private int $limit = 5; // Batas trial sebelum solusi ditinggalkan


    // --- Properti untuk menampung data ---
    private Collection $semuaMataKuliah;
    private Collection $semuaDosen;
    private Collection $semuaRuangan;
    private Collection $semuaHari;
    private Collection $semuaJam;
    private Collection $dosenSpesialisIds;
    private Collection $dosenFleksibel;

    // --- Properti untuk menyimpan hasil algoritma ---
    private array $populasi = [];
    private ?array $jadwalTerbaik = null; // Menyimpan solusi terbaik yang pernah ditemukan
    private int $fitnessTerbaik = PHP_INT_MAX; // Menyimpan fitness terbaik (nilai besar sebagai awal)


    /**
     * Metode utama yang akan menjalankan seluruh proses algoritma.
     */
    public function run()
    {
        $this->loadData();
        $this->initializePopulation(); // <-- Panggil metode baru
        $this->findBestSolution(); // Cari solusi terbaik dari populasi awal


        // --- LOOP UTAMA ALGORITMA ---
        // Loop ini akan diisi dengan fase-fase lebah lainnya nanti
        for ($cycle = 0; $cycle < $this->maxCycles; $cycle++) {
            $this->employedBeePhase(); // Jalankan fase lebah pekerja
            $this->onlookerBeePhase(); // <-- Panggil fase lebah pengamat
            $this->scoutBeePhase(); // <-- Panggil fase lebah pencari
            $this->findBestSolution(); // Update solusi terbaik di setiap akhir siklus


        }
        
        // Kembalikan hanya jadwal terbaik dan fitness-nya
        return [
            'jadwal' => $this->jadwalTerbaik,
            'fitness' => $this->fitnessTerbaik
        ];    
    }

    /**
     * Mengambil semua data master dari database.
     * (Tidak ada perubahan di sini, sama seperti sebelumnya)
     */
    private function loadData()
    {
        $this->semuaMataKuliah = MataKuliah::with('dosen')->get();
        $this->semuaDosen = Dosen::all();
        $this->semuaRuangan = Ruangan::all();
        $this->semuaHari = Hari::all();
        $this->semuaJam = Jam::all();

        $this->dosenSpesialisIds = $this->semuaMataKuliah
            ->whereNotNull('dosen_id')
            ->pluck('dosen_id')
            ->unique()
            ->values();

        $this->dosenFleksibel = $this->semuaDosen
            ->whereNotIn('id', $this->dosenSpesialisIds);
    }

    /**
     * Membuat populasi awal berisi $NP solusi jadwal acak.
     */
    private function initializePopulation()
    {
        for ($i = 0; $i < $this->NP; $i++) {
            $jadwalBaru = $this->createRandomSchedule();

            // Simpan solusi baru ke dalam array populasi
            // Fitness untuk sementara kita set 0, akan dihitung di tahap selanjutnya
            // HITUNG FITNESS untuk jadwal yang baru dibuat
            $fitness = $this->calculateFitness($jadwalBaru); // <-- Perubahan di sini

            $this->populasi[] = [
                'solusi' => $jadwalBaru,
                'fitness' => $fitness, // Placeholder
                'trial' => 0
            ];
        }
    }

    /**
     * Fase Lebah Pekerja (Employed Bee).
     * Setiap lebah mencoba memperbaiki solusinya sendiri.
     */
    private function employedBeePhase()
    {
        foreach ($this->populasi as $key => &$solusi) { // Gunakan '&' untuk modifikasi langsung
            
            // 1. Buat solusi tetangga (kandidat) dengan mutasi kecil
            $solusiKandidat = $solusi['solusi'];

            // Pilih satu gen (sesi jadwal) secara acak untuk diubah
            $indeksGen = array_rand($solusiKandidat);
            
            // Ambil hari atau jam atau ruangan baru secara acak.
            // Di sini kita coba ubah jamnya.
            switch (rand(1, 3)) {
                case 1: // Ubah Jam
                    $jamBaru = $this->semuaJam->random();
                    $solusiKandidat[$indeksGen]['jam'] = \Carbon\Carbon::parse($jamBaru->jam_mulai)->format('H:i') . ' - ' . \Carbon\Carbon::parse($jamBaru->jam_selesai)->format('H:i');
                    break;
                case 2: // Ubah Ruangan
                    $solusiKandidat[$indeksGen]['ruangan'] = $this->semuaRuangan->random()->nama_ruangan;
                    break;
                case 3: // Ubah Hari
                    $solusiKandidat[$indeksGen]['hari'] = $this->semuaHari->random()->nama_hari;
                    break;
            }
            // 2. Evaluasi solusi kandidat
            $fitnessKandidat = $this->calculateFitness($solusiKandidat);

            // 3. Lakukan seleksi (Greedy Selection)
            // Jika kandidat lebih baik (fitness lebih kecil), ganti solusi lama
            if ($fitnessKandidat < $solusi['fitness']) {
                $solusi['solusi'] = $solusiKandidat;
                $solusi['fitness'] = $fitnessKandidat;
                $solusi['trial'] = 0; // Reset trial karena berhasil menemukan yg lebih baik
            } else {
                // Jika tidak, biarkan solusi lama dan increment trial
                $solusi['trial']++;
            }
        }
        // Hapus referensi untuk menghindari bug
        unset($solusi);
    }

    /**
     * Fase Lebah Pengamat (Onlooker Bee).
     * Memilih solusi berdasarkan kualitas (fitness) dan mencoba memperbaikinya.
     */
    private function onlookerBeePhase()
    {
        // 1. Hitung total "kualitas" dari semua solusi untuk seleksi roulette wheel
        $totalInverseFitness = 0;
        foreach ($this->populasi as $solusi) {
            // Kita gunakan 1 / (1 + fitness) agar nilai yang lebih kecil (lebih baik)
            // mendapat probabilitas yang lebih besar. +1 untuk menghindari pembagian dengan nol.
            $totalInverseFitness += 1 / (1 + $solusi['fitness']);
        }
        
        // 2. Lakukan seleksi dan perbaikan sebanyak jumlah populasi
        for ($i = 0; $i < $this->NP; $i++) {
            $rand = (float) rand() / (float) getrandmax() * $totalInverseFitness;
            $cumulativeFitness = 0;
            
            // Lakukan seleksi Roulette Wheel
            foreach ($this->populasi as $key => &$solusiTerpilih) {
                $cumulativeFitness += 1 / (1 + $solusiTerpilih['fitness']);

                if ($cumulativeFitness >= $rand) {
                    // --- Proses perbaikan (SAMA PERSIS DENGAN EMPLOYED BEE) ---
                    
                    $solusiKandidat = $solusiTerpilih['solusi'];
                    $indeksGen = array_rand($solusiKandidat);
                    switch (rand(1, 3)) {
                        case 1: // Ubah Jam
                            $jamBaru = $this->semuaJam->random();
                            $solusiKandidat[$indeksGen]['jam'] = \Carbon\Carbon::parse($jamBaru->jam_mulai)->format('H:i') . ' - ' . \Carbon\Carbon::parse($jamBaru->jam_selesai)->format('H:i');
                            break;
                        case 2: // Ubah Ruangan
                            $solusiKandidat[$indeksGen]['ruangan'] = $this->semuaRuangan->random()->nama_ruangan;
                            break;
                        case 3: // Ubah Hari
                            $solusiKandidat[$indeksGen]['hari'] = $this->semuaHari->random()->nama_hari;
                            break;
                    }
                    $fitnessKandidat = $this->calculateFitness($solusiKandidat);

                    if ($fitnessKandidat < $solusiTerpilih['fitness']) {
                        $solusiTerpilih['solusi'] = $solusiKandidat;
                        $solusiTerpilih['fitness'] = $fitnessKandidat;
                        $solusiTerpilih['trial'] = 0;
                    } else {
                        $solusiTerpilih['trial']++;
                    }
                    
                    // Keluar dari loop seleksi setelah menemukan dan memproses satu solusi
                    break;
                }
            }
            unset($solusiTerpilih);
        }
    }

    /**
     * Fase Lebah Pencari (Scout Bee).
     * Mengganti solusi yang usang dengan solusi acak yang baru.
     */
    private function scoutBeePhase()
    {
        foreach ($this->populasi as $key => &$solusi) {
            if ($solusi['trial'] > $this->limit) {
                // Solusi sudah usang, ganti dengan yang baru dan acak
                $jadwalBaru = $this->createRandomSchedule();
                $fitnessBaru = $this->calculateFitness($jadwalBaru);

                $solusi['solusi'] = $jadwalBaru;
                $solusi['fitness'] = $fitnessBaru;
                $solusi['trial'] = 0;
            }
        }
        unset($solusi);
    }

    /**
     * Mencari dan menyimpan solusi terbaik dari populasi saat ini.
     */
    private function findBestSolution()
    {
        foreach ($this->populasi as $solusi) {
            if ($solusi['fitness'] < $this->fitnessTerbaik) {
                $this->fitnessTerbaik = $solusi['fitness'];
                $this->jadwalTerbaik = $solusi['solusi'];
            }
        }
    }

    /**
     * Helper method untuk membuat satu buah jadwal lengkap secara acak.
     * Metode ini menerapkan constraint dosen dan SKS.
     */
    private function createRandomSchedule(): array
    {
        $jadwal = [];
        $hariTerpakaiUntukMatkul4SKS = [];

        foreach ($this->semuaMataKuliah as $matkul) {
            // Tentukan Dosen
            $dosen = $matkul->dosen_id ? $matkul->dosen : $this->dosenFleksibel->random();
            
            // Tentukan jumlah sesi berdasarkan SKS
            $jumlahSesi = ($matkul->sks == 4) ? 2 : 1;

            for ($i = 0; $i < $jumlahSesi; $i++) {
                
                $ruangan = $this->semuaRuangan->random();
                $jam = $this->semuaJam->random();
                
                // Constraint untuk matkul 4 SKS: tidak boleh di hari yang sama
                if ($jumlahSesi > 1) {
                    do {
                        $hari = $this->semuaHari->random();
                    } while (in_array($hari->id, $hariTerpakaiUntukMatkul4SKS[$matkul->id] ?? []));
                    
                    // Catat hari yang sudah dipakai untuk matkul ini
                    $hariTerpakaiUntukMatkul4SKS[$matkul->id][] = $hari->id;
                } else {
                    $hari = $this->semuaHari->random();
                }

                // Tambahkan "gen" ke dalam jadwal
                $jadwal[] = [
                    'matkul' => $matkul->nama_matkul,
                    'sks' => $matkul->sks,
                    'dosen' => $dosen->nama_dosen,
                    'ruangan' => $ruangan->nama_ruangan,
                    'hari' => $hari->nama_hari,
                    'jam' => \Carbon\Carbon::parse($jam->jam_mulai)->format('H:i') . ' - ' . \Carbon\Carbon::parse($jam->jam_selesai)->format('H:i')
                ];
            }
        }
        return $jadwal;
    }

    /**
     * Menghitung nilai fitness (poin penalti) dari sebuah jadwal.
     * Semakin kecil nilainya, semakin bagus jadwalnya.
     *
     * @param array $jadwal Satu solusi jadwal lengkap.
     * @return int Total poin penalti.
     */
    private function calculateFitness(array $jadwal): int
    {
        $penalty = 0;
        $jumlahGen = count($jadwal);

        // Bandingkan setiap gen dengan gen lainnya untuk mencari konflik
        for ($i = 0; $i < $jumlahGen; $i++) {
            for ($j = $i + 1; $j < $jumlahGen; $j++) {
                $genA = $jadwal[$i];
                $genB = $jadwal[$j];

                // Cek apakah ada jadwal di hari dan jam yang sama
                if ($genA['hari'] === $genB['hari'] && $genA['jam'] === $genB['jam']) {
                    
                    // 1. Konflik Dosen: Dosen yang sama mengajar 2 kelas berbeda di waktu yang sama
                    if ($genA['dosen'] === $genB['dosen']) {
                        $penalty += 100; // Poin penalti tinggi untuk konflik dosen
                    }
                    
                    // 2. Konflik Ruangan: Ruangan yang sama dipakai 2 kelas berbeda di waktu yang sama
                    if ($genA['ruangan'] === $genB['ruangan']) {
                        $penalty += 100; // Poin penalti tinggi untuk konflik ruangan
                    }
                }
            }
        }

        return $penalty;
    }
}