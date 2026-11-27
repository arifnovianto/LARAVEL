@extends('layouts.app')

@section('title', 'Daftar Mahasiswa')

@section('content')

    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-blue-700">Daftar Mahasiswa</h1>
        <a href="/mahasiswa/create"
            class="bg-blue-700 text-white px-4 py-2 rounded-lg hover:bg-blue-800">
            + Tambah Mahasiswa
        </a>
    </div>

    <div class="bg-white rounded-xl shadow overflow-hidden">
        <table class="w-full text-left">
            <thead class="bg-blue-700 text-white">
                <tr>
                    <th class="px-4 py-3">No</th>
                    <th class="px-4 py-3">Nama</th>
                    <th class="px-4 py-3">Jurusan</th>
                    <th class="px-4 py-3">Angkatan</th>
                    <th class="px-4 py-3">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswa as $index => $mhs)
                <tr class="border-b hover:bg-gray-50">
                    <td class="px-4 py-3">{{ $index + 1 }}</td>
                    <td class="px-4 py-3">{{ $mhs->nama }}</td>
                    <td class="px-4 py-3">{{ $mhs->jurusan }}</td>
                    <td class="px-4 py-3">{{ $mhs->angkatan }}</td>
                    <td class="px-4 py-3 flex gap-2">
                        <a href="/mahasiswa/{{ $mhs->id }}/edit"
                            class="bg-yellow-400 text-white px-3 py-1 rounded hover:bg-yellow-500">
                            Edit
                        </a>
                        <form method="POST" action="/mahasiswa/{{ $mhs->id }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600"
                                onclick="return confirm('Yakin hapus?')">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
