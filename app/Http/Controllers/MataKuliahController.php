<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\MataKuliah;
use App\Models\Dosen; // <-- Import model Dosen
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    public function index()
    {
        // Ambil semua mata kuliah dan sertakan data dosen terkait (Eager Loading)
        $matkul_list = MataKuliah::with('dosen')->orderBy('nama_matkul')->get();
        
        // Ambil semua dosen untuk ditampilkan di form dropdown
        $dosen_list = Dosen::orderBy('nama_dosen')->get();

        return view('admin.matakuliah', compact('matkul_list', 'dosen_list'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_matkul' => 'required|string|max:255',
            'sks' => 'required|integer|in:2,4',
            'dosen_id' => 'nullable|uuid|exists:dosen,id',
        ]);

        MataKuliah::create($request->all());

        return redirect()->route('matakuliah.index')
                         ->with('success', 'Data mata kuliah berhasil ditambahkan.');
    }

    public function destroy(MataKuliah $matakulia)
    {
        $matakulia->delete();

        return redirect()->route('matakuliah.index')
                         ->with('success', 'Data mata kuliah berhasil dihapus.');
    }
}