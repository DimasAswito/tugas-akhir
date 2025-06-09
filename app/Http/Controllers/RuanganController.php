<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Ruangan;
use Illuminate\Http\Request;

class RuanganController extends Controller
{
    public function index()
    {
        $ruangan_list = Ruangan::orderBy('nama_ruangan')->get();
        return view('admin.ruangan', compact('ruangan_list'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_ruangan' => 'required|string|max:255|unique:ruangan,nama_ruangan',
        ]);

        Ruangan::create($request->all());

        return redirect()->route('ruangan.index')
                         ->with('success', 'Data ruangan berhasil ditambahkan.');
    }

    public function destroy(Ruangan $ruangan)
    {
        $ruangan->delete();

        return redirect()->route('ruangan.index')
                         ->with('success', 'Data ruangan berhasil dihapus.');
    }
}