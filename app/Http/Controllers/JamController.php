<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Jam;
use Illuminate\Http\Request;

class JamController extends Controller
{
    public function index()
    {
        $jam_list = Jam::orderBy('jam_mulai')->get();
        return view('admin.jam', compact('jam_list'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'jam_mulai' => 'required|date_format:H:i',
            'jam_selesai' => 'required|date_format:H:i|after:jam_mulai',
        ]);

        Jam::create($request->all());

        return redirect()->route('jam.index')
                         ->with('success', 'Data jam berhasil ditambahkan.');
    }

    public function destroy(Jam $jam)
    {
        $jam->delete();

        return redirect()->route('jam.index')
                         ->with('success', 'Data jam berhasil dihapus.');
    }
}