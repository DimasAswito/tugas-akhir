@extends('layouts.app')

@section('title', 'Manajemen Ruangan')

@section('content')
<div class="bg-white rounded-lg shadow-md">
    <div class="p-6 border-b border-gray-200">
        <h1 class="text-2xl font-bold text-gray-800">Manajemen Data Ruangan</h1>
        <p class="mt-1 text-sm text-gray-600">Tambah, lihat, dan hapus data ruangan kelas.</p>
    </div>

    <div class="p-6">
        @if(session('success'))
            <div class="mb-6 bg-green-100 border-l-4 border-green-500 text-green-700 p-4" role="alert">
                <p class="font-bold">Sukses</p>
                <p>{{ session('success') }}</p>
            </div>
        @endif

        <form action="{{ route('ruangan.store') }}" method="POST" class="mb-8">
            @csrf
            <div class="flex flex-col sm:flex-row items-start sm:items-center space-y-2 sm:space-y-0 sm:space-x-4">
                <div class="w-full sm:flex-1">
                    <input type="text" name="nama_ruangan" class="block w-full border-gray-300 rounded-md shadow-sm" placeholder="Masukkan Nama Ruangan (Contoh: Aula)" required>
                </div>
                <div>
                    <button type="submit" class="w-full sm:w-auto px-6 py-2 text-white font-semibold bg-blue-600 rounded-md shadow-sm hover:bg-blue-700">Simpan</button>
                </div>
            </div>
        </form>

        <hr class="border-gray-200">

        <div class="mt-8">
            <h2 class="text-lg font-semibold text-gray-700 mb-4">Daftar Ruangan</h2>
            <div class="overflow-x-auto rounded-lg shadow">
                <table class="min-w-full divide-y divide-gray-200 bg-white">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">No</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nama Ruangan</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @forelse($ruangan_list as $item)
                            <tr class="hover:bg-gray-100">
                                <td class="px-6 py-4 text-sm text-gray-500">{{ $loop->iteration }}</td>
                                <td class="px-6 py-4 text-sm font-medium text-gray-900">{{ $item->nama_ruangan }}</td>
                                <td class="px-6 py-4 text-sm font-medium">
                                    <form action="{{ route('ruangan.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin hapus?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900 font-semibold">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr><td colspan="3" class="px-6 py-4 text-center text-sm text-gray-500">Belum ada data ruangan.</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection