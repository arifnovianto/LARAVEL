@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

    <div class="bg-green-50 border-l-4 border-green-500 p-6 rounded-xl mb-6">
        <h1 class="text-3xl font-bold text-green-600">🏠 Dashboard</h1>
        <p class="text-gray-600 mt-1">Selamat datang, <strong>{{ auth()->user()->name }}</strong>!</p>
        <p class="text-sm text-gray-500">Role: {{ auth()->user()->role }}</p>
    </div>

    <p class="text-gray-600">Kamu login sebagai user biasa.</p>

    <div class="mt-6">
        <a href="/logout" class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600">Logout</a>
    </div>

@endsection
