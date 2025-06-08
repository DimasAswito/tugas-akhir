<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\HariController;
use App\Http\Controllers\JamController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\JadwalController;
use Illuminate\Support\Facades\DB;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\Controller::class, 'index'])->name('index');

Route::resource('admin/dosen', DosenController::class)->except(['create', 'show', 'edit', 'update']);
Route::resource('admin/hari', HariController::class)->except(['create', 'show', 'edit', 'update']);
Route::resource('admin/jam', JamController::class)->except(['create', 'show', 'edit', 'update']);
Route::resource('admin/ruangan', RuanganController::class)->except(['create', 'show', 'edit', 'update']);
Route::resource('admin/matakuliah', MataKuliahController::class)->except(['create', 'show', 'edit', 'update']);
Route::get('/generate-schedule', [JadwalController::class, 'generate'])->name('schedule.generate');