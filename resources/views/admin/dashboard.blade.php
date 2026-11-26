@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')

    <div class="bg-red-50 border-l-4 border-red-500 p-6 rounded-xl mb-6">
        <h1 class="text-3xl font-bold text-red-600">👑 Admin Dashboard</h1>
        <p class="text-gray-600 mt-1">Selamat datang, <strong>{{ auth()->user()->name }}</strong>!</p>
        <p class="text-sm text-gray-500">Role: {{ auth()->user()->role }}</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="bg-white rounded-xl shadow p-5 border-l-4 border-blue-500">
            <p class="text-gray-500 text-sm">Total Mahasiswa</p>
            <p class="text-2xl font-bold text-blue-700">3</p>
        </div>
        <div class="bg-white rounded-xl shadow p-5 border-l-4 border-green-500">
            <p class="text-gray-500 text-sm">Total User</p>
            <p class="text-2xl font-bold text-green-700">2</p>
        </div>
    </div>

    <div class="mt-6">
        <a href="/logout" class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600">Logout</a>
    </div>

@endsection
