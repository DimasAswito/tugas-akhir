@extends('layouts.app')

@section('title', 'Manajemen Mata Kuliah')

@section('content')
<div class="bg-white rounded-lg shadow-md">
    <div class="p-6 border-b border-gray-200">
        <h1 class="text-2xl font-bold text-gray-800">Manajemen Data Mata Kuliah</h1>
        <p class="mt-1 text-sm text-gray-600">Tambah, lihat, dan hapus data mata kuliah beserta dosen pengampunya.</p>
    </div>

    <div class="p-6">
        @if(session('success'))
            <div class="mb-6 bg-green-100 border-l-4 border-green-500 text-green-700 p-4" role="alert">
                <p class="font-bold">Sukses</p>
                <p>{{ session('success') }}</p>
            </div>
        @endif

        <form action="{{ route('matakuliah.store') }}" method="POST" class="mb-8">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-end">
                <div class="md:col-span-2">
                    <label for="nama_matkul" class="block text-sm font-medium text-gray-700 mb-1">Nama Mata Kuliah</label>
                    <input type="text" name="nama_matkul" id="nama_matkul" class="block w-full border-gray-300 rounded-md shadow-sm" required>
                </div>

                <div>
                    <label for="sks" class="block text-sm font-medium text-gray-700 mb-1">SKS</label>
                    <select name="sks" id="sks" class="block w-full border-gray-300 rounded-md shadow-sm" required>
                        <option value="2">2 SKS</option>
                        <option value="4">4 SKS</option>
                    </select>
                </div>
                
                <div class="md:col-span-2">
                    <label for="dosen_id" class="block text-sm font-medium text-gray-700 mb-1">Dosen Pengampu</pre>
                    <select name="dosen_id" id="dosen_id" class="block w-full border-gray-300 rounded-md shadow-sm">
                        <option value="">-- Pilih Dosen --</option>
                        @foreach($dosen_list as $dosen)
                            <option value="{{ $dosen->id }}">{{ $dosen->nama_dosen }}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="md:col-start-4">
                    <button type="submit" class="w-full px-6 py-2 text-white font-semibold bg-blue-600 rounded-md shadow-sm hover:bg-blue-700">Simpan</button>
                </div>
            </div>
        </form>

        <hr class="border-gray-200">

        <div class="mt-8">
            <h2 class="text-lg font-semibold text-gray-700 mb-4">Daftar Mata Kuliah</h2>
            <div class="overflow-x-auto rounded-lg shadow">
                <table class="min-w-full divide-y divide-gray-200 bg-white">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">No</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nama Mata Kuliah</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">SKS</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Dosen Pengampu</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @forelse($matkul_list as $item)
                            <tr class="hover:bg-gray-100">
                                <td class="px-6 py-4 text-sm text-gray-500">{{ $loop->iteration }}</td>
                                <td class="px-6 py-4 text-sm font-medium text-gray-900">{{ $item->nama_matkul }}</td>
                                <td class="px-6 py-4 text-sm text-gray-900">{{ $item->sks }}</td>
                                <td class="px-6 py-4 text-sm text-gray-900">{{ $item->dosen->nama_dosen ?? 'N/A' }}</td>
                                <td class="px-6 py-4 text-sm font-medium">
                                    <form action="{{ route('matakuliah.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin hapus?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900 font-semibold">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr><td colspan="5" class="px-6 py-4 text-center text-sm text-gray-500">Belum ada data mata kuliah.</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection