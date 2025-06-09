<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Hari;
use Illuminate\Http\Request;

class HariController extends Controller
{
    public function index()
    {
        $hari_list = Hari::all();
        return view('admin.hari', compact('hari_list'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_hari' => 'required|string|max:255|unique:hari,nama_hari',
        ]);

        Hari::create($request->all());

        return redirect()->route('hari.index')
                         ->with('success', 'Data hari berhasil ditambahkan.');
    }

    public function destroy(Hari $hari)
    {
        $hari->delete();

        return redirect()->route('hari.index')
                         ->with('success', 'Data hari berhasil dihapus.');
    }
}