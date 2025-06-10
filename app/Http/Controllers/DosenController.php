<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Menampilkan daftar dosen dan form tambah.
     */
    public function index()
    {
        $dosen = Dosen::orderBy('nama_dosen')->get();
        return view('admin.dosen', ['dosen_list' => $dosen]);
    }

    /**
     * Menyimpan data dosen baru.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_dosen' => 'required|string|max:255|unique:dosen,nama_dosen',
        ]);

        // Simpan data baru
        Dosen::create($request->all());

        return redirect()->route('dosen.index')
                         ->with('success', 'Data dosen berhasil ditambahkan.');
    }

    /**
     * Menghapus data dosen.
     */
    public function destroy(Dosen $dosen)
    {
        $dosen->delete();

        return redirect()->route('dosen.index')
                         ->with('success', 'Data dosen berhasil dihapus.');
    }
}
