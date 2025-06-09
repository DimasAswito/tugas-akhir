<?php

namespace App\Http\Controllers;

use App\Services\ScheduleGenerator; 
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    /**
     * Memicu proses pembuatan jadwal otomatis.
     */
    public function generate()
    {
        // Inisialisasi service generator
        $generator = new ScheduleGenerator();

        // Jalankan metode utama dari generator
        $result = $generator->run();

        // Tampilkan hasilnya dalam format JSON untuk di-debug
        return response()->json($result);
    }
}