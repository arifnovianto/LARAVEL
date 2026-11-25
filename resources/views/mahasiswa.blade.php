@extends('layouts.app')

@section('title', 'Daftar Mahasiswa')

@section('content')

    <h1 class="text-3xl font-bold text-blue-700 mb-6">Daftar Mahasiswa</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        @foreach ($mahasiswa as $mhs)
            <div class="bg-white rounded-xl shadow p-5 border-l-4 border-blue-500">
                <p class="text-lg font-semibold text-gray-800">{{ $mhs['nama'] }}</p>
                <p class="text-sm text-gray-500">{{ $mhs['jurusan'] }}</p>
            </div>
        @endforeach
    </div>

@endsection
