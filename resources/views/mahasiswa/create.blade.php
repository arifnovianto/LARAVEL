@extends('layouts.app')

@section('title', 'Tambah Mahasiswa')

@section('content')

    <h1 class="text-3xl font-bold text-blue-700 mb-6">Tambah Mahasiswa</h1>

    <div class="bg-white rounded-xl shadow p-6 max-w-lg">
        <form method="POST" action="/mahasiswa">
            @csrf

            <div class="mb-4">
                <label class="block text-sm font-medium mb-1">Nama</label>
                <input type="text" name="nama"
                    class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
                    placeholder="Nama lengkap" required>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium mb-1">Jurusan</label>
                <input type="text" name="jurusan"
                    class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
                    placeholder="Jurusan" required>
            </div>

            <div class="mb-6">
                <label class="block text-sm font-medium mb-1">Angkatan</label>
                <input type="text" name="angkatan"
                    class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
                    placeholder="2022" required>
            </div>

            <div class="flex gap-3">
                <button type="submit"
                    class="bg-blue-700 text-white px-6 py-2 rounded-lg hover:bg-blue-800">
                    Simpan
                </button>
                <a href="/mahasiswa"
                    class="bg-gray-400 text-white px-6 py-2 rounded-lg hover:bg-gray-500">
                    Batal
                </a>
            </div>
        </form>
    </div>

@endsection
