@extends('layouts.app')

@section('title', 'Edit Mahasiswa')

@section('content')

    <h1 class="text-3xl font-bold text-blue-700 mb-6">Edit Mahasiswa</h1>

    <div class="bg-white rounded-xl shadow p-6 max-w-lg">
        <form method="POST" action="/mahasiswa/{{ $mahasiswa->id }}">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block text-sm font-medium mb-1">Nama</label>
                <input type="text" name="nama"
                    value="{{ $mahasiswa->nama }}"
                    class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
                    required>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium mb-1">Jurusan</label>
                <input type="text" name="jurusan"
                    value="{{ $mahasiswa->jurusan }}"
                    class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
                    required>
            </div>

            <div class="mb-6">
                <label class="block text-sm font-medium mb-1">Angkatan</label>
                <input type="text" name="angkatan"
                    value="{{ $mahasiswa->angkatan }}"
                    class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
                    required>
            </div>

            <div class="flex gap-3">
                <button type="submit"
                    class="bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700">
                    Update
                </button>
                <a href="/mahasiswa"
                    class="bg-gray-400 text-white px-6 py-2 rounded-lg hover:bg-gray-500">
                    Batal
                </a>
            </div>
        </form>
    </div>

@endsection
