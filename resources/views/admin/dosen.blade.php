@extends('layouts.app')

@section('title', 'Manajemen Dosen')

@section('content')
<div class="bg-white rounded-lg shadow-md">

    <div class="p-6 border-b border-gray-200">
        <h1 class="text-2xl font-bold text-gray-800">Manajemen Data Dosen</h1>
        <p class="mt-1 text-sm text-gray-600">Tambah, lihat, dan hapus data dosen pengajar.</p>
    </div>

    <div class="p-6">
        @if(session('success'))
            <div class="mb-6 bg-green-100 border-l-4 border-green-500 text-green-700 p-4" role="alert">
                <p class="font-bold">Sukses</p>
                <p>{{ session('success') }}</p>
            </div>
        @endif

        <div class="mb-8">
            <h2 class="text-lg font-semibold text-gray-700 mb-2">Form Tambah Dosen</h2>
            <form action="{{ route('dosen.store') }}" method="POST">
                @csrf
                <div class="flex flex-col sm:flex-row items-start sm:items-center space-y-2 sm:space-y-0 sm:space-x-4">
                    <div class="w-full sm:flex-1">
                        <input 
                            type="text" 
                            name="nama_dosen" 
                            class="block w-full px-4 py-2 bg-white border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('nama_dosen') border-red-500 @enderror"
                            placeholder="Masukkan Nama Dosen" 
                            value="{{ old('nama_dosen') }}" 
                            required>
                        
                        @error('nama_dosen')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        {{-- Tombol dengan aksen biru --}}
                        <button type="submit" class="w-full sm:w-auto px-6 py-2 text-white font-semibold bg-blue-600 rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition ease-in-out duration-150">
                            Simpan
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <hr class="border-gray-200">

        <div class="mt-8">
            <h2 class="text-lg font-semibold text-gray-700 mb-4">Daftar Dosen</h2>
            <div class="overflow-x-auto rounded-lg shadow">
                <table class="min-w-full divide-y divide-gray-200 bg-white">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Dosen</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @forelse($dosen_list as $dosen)
                            <tr class="hover:bg-gray-100 transition duration-150 ease-in-out">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $loop->iteration }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $dosen->nama_dosen }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <form action="{{ route('dosen.destroy', $dosen->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900 font-semibold">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="px-6 py-4 text-center text-sm text-gray-500">
                                    Belum ada data dosen.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection