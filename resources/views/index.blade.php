<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OPTIMASI PENJADWALAN MATA KULIAH - POLIJE SIDOARJO</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/style.css">
    <style>
        
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <img src="{{ asset('assets/images/Logo.png') }}" alt="Logo" class="h-10 w-10">
                        <span class="ml-3 text-xl font-semibold text-blue-600">OPTIMASI PENJADWALAN</span>
                    </div>
                    <div class="hidden md:ml-6 md:flex md:space-x-8">
                        <a href="#hero" class="border-blue-500 text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Home</a>
                        <a href="#features" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Fitur</a>
                        <a href="#tentang" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Tentang</a>
                        <a href="#kontak" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Kontak</a>
                    </div>
                </div>
                <div class="hidden md:flex items-center">
                    <a href="#" class="ml-8 inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Masuk</a>
                </div>
                <div class="-mr-2 flex items-center md:hidden">
                    <button type="button" class="bg-white inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div id="hero" class="hero-gradient text-white">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
            <div class="lg:w-1/2">
                <h1 class="text-4xl font-extrabold tracking-tight sm:text-5xl">
                    <span class="block">OPTIMASI PENJADWALAN MATA KULIAH</span>
                    <span class="block text-blue-100">BERBASIS WEB</span>
                </h1>
                <p class="mt-3 text-xl sm:mt-5 sm:text-lg sm:max-w-xl md:mt-5">
                    Menggunakan algoritma Artificial Bee Colony untuk memaksimalkan efisiensi penjadwalan mata kuliah di Program Studi Teknik Informatika Polije Sidoarjo
                </p>
                <div class="mt-8 flex gap-4">
                    <div class="rounded-md shadow">
                        <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-blue-600 bg-white hover:bg-gray-50 md:py-4 md:text-lg md:px-10">
                            Mulai Sekarang
                        </a>
                    </div>
                    <div class="rounded-md shadow">
                        <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-500 hover:bg-blue-600 md:py-4 md:text-lg md:px-10">
                            <i class="fas fa-play mr-2"></i> Video Demo
                        </a>
                    </div>
                </div>
            </div>
            <div class="mt-8 lg:mt-0 lg:ml-8 lg:w-1/2">
                <div class="relative">
                    <div class="absolute inset-0 bg-blue-400 opacity-20 rounded-lg blur-lg glow"></div>
                    <div class="relative bg-white rounded-lg shadow-xl p-6 text-gray-800">
                        <div class="flex justify-between items-center border-b pb-4">
                            <h3 class="text-lg font-semibold text-blue-600">Sistem Penjadwalan Cerdas</h3>
                            <span class="px-2 py-1 text-xs bg-blue-100 text-blue-800 rounded-full">v2.0</span>
                        </div>
                        <div class="mt-4 grid grid-cols-5 gap-1 text-xs text-center">
                            <div class="bg-gray-100 p-2 rounded">Senin</div>
                            <div class="bg-gray-100 p-2 rounded">Selasa</div>
                            <div class="bg-gray-100 p-2 rounded">Rabu</div>
                            <div class="bg-gray-100 p-2 rounded">Kamis</div>
                            <div class="bg-gray-100 p-2 rounded">Jumat</div>
                            
                            <div class="border p-1 text-xs">
                                <div class="bg-blue-100 rounded p-1 h-20">K001 <br>AI</div>
                            </div>
                            <div class="border p-1">
                                <div class="bg-blue-50 rounded p-1 h-20">-</div>
                            </div>
                            <div class="border p-1">
                                <div class="bg-blue-200 rounded p-1 h-20">K002 <br>Basis Data</div>
                            </div>
                            <div class="border p-1">
                                <div class="bg-blue-100 rounded p-1 h-20">-</div>
                            </div>
                            <div class="border p-1">
                                <div class="bg-blue-50 rounded p-1 h-20">K003 <br>Jaringan</div>
                            </div>
                            
                            <div class="border p-1">
                                <div class="bg-blue-50 rounded p-1 h-20">-</div>
                            </div>
                            <div class="border p-1">
                                <div class="bg-blue-100 rounded p-1 h-20">K004 <br>PBO</div>
                            </div>
                            <div class="border p-1">
                                <div class="bg-blue-50 rounded p-1 h-20">-</div>
                            </div>
                            <div class="border p-1">
                                <div class="bg-blue-200 rounded p-1 h-20">K005 <br>Web Dev</div>
                            </div>
                            <div class="border p-1">
                                <div class="bg-blue-100 rounded p-1 h-20">-</div>
                            </div>
                        </div>
                        <div class="mt-4 text-xs text-gray-500">
                            <p>Contoh output penjadwalan yang dihasilkan oleh sistem</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div id="features" class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-blue-600 font-semibold tracking-wide uppercase">Fitur Unggulan</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Solusi Komprehensif untuk Penjadwalan Mata Kuliah
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    Sistem kami memberikan kemudahan dalam pengelolaan jadwal dengan teknologi terbaru
                </p>
            </div>

            <div class="mt-10">
                <div class="grid grid-cols-1 gap-12 md:grid-cols-2 lg:grid-cols-3">
                    <div class="feature-card bg-white p-6 rounded-lg shadow-md transition-all duration-300 border border-gray-100 hover:border-blue-100">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white mb-4">
                            <i class="fas fa-user-tie text-xl"></i>
                        </div>
                        <h3 class="text-lg font-medium text-gray-900 mb-2">Manajemen Dosen</h3>
                        <p class="text-gray-500">
                            Kelola data dosen termasuk waktu mengajar yang tersedia, preferensi jadwal, dan beban mengajar.
                        </p>
                    </div>

                    <div class="feature-card bg-white p-6 rounded-lg shadow-md transition-all duration-300 border border-gray-100 hover:border-blue-100">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white mb-4">
                            <i class="fas fa-book text-xl"></i>
                        </div>
                        <h3 class="text-lg font-medium text-gray-900 mb-2">Manajemen Mata Kuliah</h3>
                        <p class="text-gray-500">
                            Kelola semua mata kuliah termasuk bobot SKS, kelas paralel, dan prasyarat mata kuliah.
                        </p>
                    </div>

                    <div class="feature-card bg-white p-6 rounded-lg shadow-md transition-all duration-300 border border-gray-100 hover:border-blue-100">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white mb-4">
                            <i class="fas fa-building text-xl"></i>
                        </div>
                        <h3 class="text-lg font-medium text-gray-900 mb-2">Manajemen Ruangan</h3>
                        <p class="text-gray-500">
                            Sistem mempertimbangkan kapasitas ruangan, fasilitas, dan lokasi untuk penjadwalan optimal.
                        </p>
                    </div>

                    <div class="feature-card bg-white p-6 rounded-lg shadow-md transition-all duration-300 border border-gray-100 hover:border-blue-100">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white mb-4">
                            <i class="fas fa-robot text-xl"></i>
                        </div>
                        <h3 class="text-lg font-medium text-gray-900 mb-2">Algoritma ABC</h3>
                        <p class="text-gray-500">
                            Menggunakan Artificial Bee Colony untuk optimasi dengan meminimalkan konflik jadwal dan maksimalkan sumber daya.
                        </p>
                    </div>

                    <div class="feature-card bg-white p-6 rounded-lg shadow-md transition-all duration-300 border border-gray-100 hover:border-blue-100">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white mb-4">
                            <i class="fas fa-file-excel text-xl"></i>
                        </div>
                        <h3 class="text-lg font-medium text-gray-900 mb-2">Export Excel</h3>
                        <p class="text-gray-500">
                            Hasil jadwal dapat di-export ke format Excel untuk kemudahan distribusi dan pencetakan.
                        </p>
                    </div>

                    <div class="feature-card bg-white p-6 rounded-lg shadow-md transition-all duration-300 border border-gray-100 hover:border-blue-100">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white mb-4">
                            <i class="fas fa-chart-line text-xl"></i>
                        </div>
                        <h3 class="text-lg font-medium text-gray-900 mb-2">Analisis Konflik</h3>
                        <p class="text-gray-500">
                            Sistem menyediakan analisis konflik dan rekomendasi perbaikan untuk jadwal yang lebih optimal.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- How It Works Section -->
    <div id="tentang" class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center mb-12">
                <h2 class="text-base text-blue-600 font-semibold tracking-wide uppercase">Cara Kerja Sistem</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Proses Optimasi Penjadwalan
                </p>
            </div>
            
            <div class="relative">
                <!-- Timeline line -->
                <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 h-full w-0.5 bg-blue-200"></div>
                
                <!-- Timeline items -->
                <div class="relative space-y-8">
                    <!-- Item 1 -->
                    <div class="md:flex md:items-center md:group">
                        <div class="md:w-1/2 md:pr-12 md:text-right">
                            <h3 class="text-lg font-medium text-gray-900">Input Data</h3>
                            <p class="mt-2 text-gray-500">
                                Masukkan data dosen, mata kuliah, ruangan, dan aturan penjadwalan melalui antarmuka web yang mudah digunakan.
                            </p>
                        </div>
                        <div class="hidden md:block w-10 h-10 rounded-full bg-blue-600 text-white flex items-center justify-center flex-shrink-0 mx-auto md:mx-0 group-even:order-first">
                            <span>1</span>
                        </div>
                        <div class="md:w-1/2 md:pl-12 group-even:order-first">
                            <div class="p-4 bg-white rounded-lg shadow border border-gray-100">
                                <div class="flex space-x-2">
                                    <div class="flex items-center justify-center w-10 h-10 rounded-full bg-blue-100 text-blue-600">
                                        <i class="fas fa-upload"></i>
                                    </div>
                                    <div>
                                        <h4 class="text-sm font-medium text-gray-900">Upload Data</h4>
                                        <p class="text-xs text-gray-500">Dosen, Mata Kuliah, Ruangan</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Item 2 -->
                    <div class="md:flex md:items-center md:group">
                        <div class="md:w-1/2 md:pr-12 md:text-right group-even:order-last">
                            <div class="p-4 bg-white rounded-lg shadow border border-gray-100">
                                <div class="flex space-x-2">
                                    <div class="flex items-center justify-center w-10 h-10 rounded-full bg-blue-100 text-blue-600">
                                        <i class="fas fa-cog"></i>
                                    </div>
                                    <div>
                                        <h4 class="text-sm font-medium text-gray-900">Parameter Optimasi</h4>
                                        <p class="text-xs text-gray-500">Bobot SKS, Jam, Hari</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hidden md:block w-10 h-10 rounded-full bg-blue-600 text-white flex items-center justify-center flex-shrink-0 mx-auto md:mx-0">
                            <span>2</span>
                        </div>
                        <div class="md:w-1/2 md:pl-12 group-even:order-first">
                            <h3 class="text-lg font-medium text-gray-900">Atur Parameter</h3>
                            <p class="mt-2 text-gray-500">
                                Tentukan parameter optimasi termasuk bobot SKS, jam dan hari kuliah, serta aturan khusus untuk penjadwalan.
                            </p>
                        </div>
                    </div>
                    
                    <!-- Item 3 -->
                    <div class="md:flex md:items-center md:group">
                        <div class="md:w-1/2 md:pr-12 md:text-right">
                            <h3 class="text-lg font-medium text-gray-900">Proses Artificial Bee Colony</h3>
                            <p class="mt-2 text-gray-500">
                                Algoritma ABC bekerja untuk menemukan solusi optimal dengan mensimulasikan perilaku koloni lebah madu.
                            </p>
                        </div>
                        <div class="hidden md:block w-10 h-10 rounded-full bg-blue-600 text-white flex items-center justify-center flex-shrink-0 mx-auto md:mx-0 group-even:order-first">
                            <span>3</span>
                        </div>
                        <div class="md:w-1/2 md:pl-12 group-even:order-first">
                            <div class="p-4 bg-white rounded-lg shadow border border-gray-100">
                                <div class="flex space-x-2">
                                    <div class="flex items-center justify-center w-10 h-10 rounded-full bg-blue-100 text-blue-600">
                                        <i class="fas fa-robot"></i>
                                    </div>
                                    <div>
                                        <h4 class="text-sm font-medium text-gray-900">ABC Algorithm</h4>
                                        <p class="text-xs text-gray-500">Exploration & Exploitation</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Item 4 -->
                    <div class="md:flex md:items-center md:group">
                        <div class="md:w-1/2 md:pr-12 md:text-right group-even:order-last">
                            <div class="p-4 bg-white rounded-lg shadow border border-gray-100">
                                <div class="flex space-x-2">
                                    <div class="flex items-center justify-center w-10 h-10 rounded-full bg-blue-100 text-blue-600">
                                        <i class="fas fa-file-excel"></i>
                                    </div>
                                    <div>
                                        <h4 class="text-sm font-medium text-gray-900">Hasil Excel</h4>
                                        <p class="text-xs text-gray-500">Download & Distribusi</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hidden md:block w-10 h-10 rounded-full bg-blue-600 text-white flex items-center justify-center flex-shrink-0 mx-auto md:mx-0">
                            <span>4</span>
                        </div>
                        <div class="md:w-1/2 md:pl-12 group-even:order-first">
                            <h3 class="text-lg font-medium text-gray-900">Output Jadwal</h3>
                            <p class="mt-2 text-gray-500">
                                Hasil jadwal optimal dapat dilihat di dashboard web dan diekspor ke format Excel untuk penggunaan lebih lanjut.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonial -->
    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center mb-12">
                <h2 class="text-base text-blue-600 font-semibold tracking-wide uppercase">Testimoni</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Apa Kata Pengguna?
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-gray-50 p-6 rounded-lg shadow border border-gray-100">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 rounded-full bg-blue-200 flex items-center justify-center text-blue-800 font-bold">DK</div>
                        <div class="ml-4">
                            <h4 class="font-medium text-gray-900">Dr. Dhany Kurniawan, M.Kom</h4>
                            <p class="text-sm text-gray-500">Ketua Program Studi</p>
                        </div>
                    </div>
                    <p class="text-gray-600">
                        "Sistem ini sangat membantu dalam pembuatan jadwal semesteran. Konflik jadwal yang biasanya memakan waktu berminggu-minggu sekarang bisa diselesaikan dalam hitungan hari."
                    </p>
                    <div class="mt-3 flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star ml-1"></i>
                        <i class="fas fa-star ml-1"></i>
                        <i class="fas fa-star ml-1"></i>
                        <i class="fas fa-star ml-1"></i>
                    </div>
                </div>
                
                <div class="bg-gray-50 p-6 rounded-lg shadow border border-gray-100">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 rounded-full bg-blue-200 flex items-center justify-center text-blue-800 font-bold">AP</div>
                        <div class="ml-4">
                            <h4 class="font-medium text-gray-900">Ananda Putra, S.Kom., M.Kom</h4>
                            <p class="text-sm text-gray-500">Dosen Teknik Informatika</p>
                        </div>
                    </div>
                    <p class="text-gray-600">
                        "Dengan sistem ini, saya bisa mengajukan preferensi jam mengajar dan 90% jadwal mengajar saya sesuai dengan yang saya inginkan. Nilai tambah besar untuk work-life balance."
                    </p>
                    <div class="mt-3 flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star ml-1"></i>
                        <i class="fas fa-star ml-1"></i>
                        <i class="fas fa-star ml-1"></i>
                        <i class="fas fa-star-half-alt ml-1"></i>
                    </div>
                </div>
                
                <div class="bg-gray-50 p-6 rounded-lg shadow border border-gray-100">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 rounded-full bg-blue-200 flex items-center justify-center text-blue-800 font-bold">RM</div>
                        <div class="ml-4">
                            <h4 class="font-medium text-gray-900">Rina Mulyana, S.Kom</h4>
                            <p class="text-sm text-gray-500">Administrasi Akademik</p>
                        </div>
                    </div>
                    <p class="text-gray-600">
                        "Sebelum ada sistem ini, pembuatan jadwal adalah mimpi buruk. Sekarang dengan beberapa klik dan parameter, jadwal bisa langsung dibuat. Export ke Excel juga sangat membantu."
                    </p>
                    <div class="mt-3 flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star ml-1"></i>
                        <i class="fas fa-star ml-1"></i>
                        <i class="fas fa-star ml-1"></i>
                        <i class="fas fa-star ml-1"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div id="kontak" class="bg-blue-700">
        <div class="max-w-2xl mx-auto text-center py-16 px-4 sm:py-20 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                <span class="block">Siap Mengoptimalkan Penjadwalan?</span>
                <span class="block text-blue-200">Mulai Gunakan Sistem Kami Hari Ini</span>
            </h2>
            <p class="mt-4 text-lg leading-6 text-blue-100">
                Dapatkan efisiensi waktu dan sumber daya dalam mengelola jadwal mata kuliah di Program Studi Teknik Informatika Polije Sidoarjo.
            </p>
            <a href="#" class="mt-8 w-full inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-blue-600 bg-white hover:bg-blue-50 sm:w-auto">
                <i class="fas fa-user-plus mr-2"></i> Daftar Sekarang
            </a>
            <div class="mt-4 text-sm text-blue-200">
                <p>Sudah punya akun? <a href="#" class="font-medium text-white hover:text-blue-50">Masuk disini <i class="fas fa-arrow-right ml-1"></i></a></p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
            <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
                <div>
                    <div class="flex items-center">
                        <div class="hexagon bg-blue-600 w-8 h-8 flex items-center justify-center text-white font-bold">
                            <span>ABC</span>
                        </div>
                        <span class="ml-3 text-xl font-semibold text-white">OPTIMASI PENJADWALAN</span>
                    </div>
                    <p class="mt-4 text-gray-300 text-sm">
                        Sistem optimasi penjadwalan mata kuliah berbasis web menggunakan algoritma Artificial Bee Colony untuk Program Studi Teknik Informatika Polije Sidoarjo.
                    </p>
                    <div class="mt-4 flex space-x-6">
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
                
                <div class="grid grid-cols-2 gap-8">
                    <div>
                        <h3 class="text-sm font-semibold text-gray-300 tracking-wider uppercase">Navigasi</h3>
                        <ul class="mt-4 space-y-3">
                            <li><a href="#" class="text-base text-gray-400 hover:text-white">Beranda</a></li>
                            <li><a href="#" class="text-base text-gray-400 hover:text-white">Fitur</a></li>
                            <li><a href="#" class="text-base text-gray-400 hover:text-white">Tentang</a></li>
                            <li><a href="#" class="text-base text-gray-400 hover:text-white">Kontak</a></li>
                            <li><a href="#" class="text-base text-gray-400 hover:text-white">Login</a></li>
                        </ul>
                    </div>
                    
                    <div>
                        <h3 class="text-sm font-semibold text-gray-300 tracking-wider uppercase">Legal</h3>
                        <ul class="mt-4 space-y-3">
                            <li><a href="#" class="text-base text-gray-400 hover:text-white">Kebijakan Privasi</a></li>
                            <li><a href="#" class="text-base text-gray-400 hover:text-white">Syarat Penggunaan</a></li>
                            <li><a href="#" class="text-base text-gray-400 hover:text-white">FAQ</a></li>
                            <li><a href="#" class="text-base text-gray-400 hover:text-white">Dokumentasi</a></li>
                        </ul>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-sm font-semibold text-gray-300 tracking-wider uppercase">Hubungi Kami</h3>
                    <ul class="mt-4 space-y-3">
                        <li class="flex">
                            <i class="fas fa-map-marker-alt text-gray-400 mt-1 mr-3"></i>
                            <span class="text-base text-gray-400">Jl. Raya Sidoarjo - Jl. Jenggolo No.2, Sidoarjo, Jawa Timur</span>
                        </li>
                        <li class="flex">
                            <i class="fas fa-phone text-gray-400 mt-1 mr-3"></i>
                            <span class="text-base text-gray-400">(031) 1234567</span>
                        </li>
                        <li class="flex">
                            <i class="fas fa-envelope text-gray-400 mt-1 mr-3"></i>
                            <span class="text-base text-gray-400">penjadwalan@polije-sda.ac.id</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="mt-12 pt-8 border-t border-gray-700 flex flex-col md:flex-row justify-between items-center">
                <p class="text-base text-gray-400">
                    &copy; 2023 Program Studi Teknik Informatika Polije Sidoarjo. All rights reserved.
                </p>
                <div class="mt-4 md:mt-0">
                    <p class="text-sm text-gray-400">
                        Dibangun dengan <i class="fas fa-heart text-red-400"></i> untuk Pendidikan yang Lebih Baik
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <script href="assets/script.js"></script>
</body>
</html>