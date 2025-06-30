<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\HariController;
use App\Http\Controllers\JamController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\DB;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\Controller::class, 'index'])->name('index');

// Rute publik untuk menampilkan form
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');

// Rute callback yang akan dipanggil oleh JavaScript setelah login Supabase berhasil
Route::post('/auth/callback', [AuthController::class, 'handleCallback'])->name('auth.callback');

// Grup rute terproteksi
Route::middleware('auth.supabase')->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});

Route::resource('admin/dosen', DosenController::class)->except(['create', 'show', 'edit', 'update']);
Route::resource('admin/hari', HariController::class)->except(['create', 'show', 'edit', 'update']);
Route::resource('admin/jam', JamController::class)->except(['create', 'show', 'edit', 'update']);
Route::resource('admin/ruangan', RuanganController::class)->except(['create', 'show', 'edit', 'update']);
Route::resource('admin/matakuliah', MataKuliahController::class)->except(['create', 'show', 'edit', 'update']);
Route::get('/generate-schedule', [JadwalController::class, 'generate'])->name('schedule.generate');