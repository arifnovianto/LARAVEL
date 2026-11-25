<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

// Halaman utama
Route::get('/', function () {
    return view('welcome');
});

// Halaman mahasiswa
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);

// Halaman tentang
Route::get('/tentang', function () {
    return view('tentang');
});

// Halaman informasi
Route::get('/informasi', function () {
    return view('informasi');
});

// Halaman kurikulum
Route::get('/kurikulum', function () {
    return view('kurikulum');
});

// Halaman kontak
Route::get('/kontak', function () {
    return view('kontak');
});
