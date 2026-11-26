<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\AuthController;

// Halaman publik
Route::get('/', function () { return view('welcome'); });
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/tentang', function () { return view('tentang'); });
Route::get('/informasi', function () { return view('informasi'); });
Route::get('/kurikulum', function () { return view('kurikulum'); });
Route::get('/kontak', function () { return view('kontak'); });

// Auth
Route::get('/login', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

// Halaman user - harus login
Route::get('/dashboard', function () {
    return view('user.dashboard');
})->middleware('auth');

// Halaman admin - harus login + role admin
Route::get('/admin', function () {
    return view('admin.dashboard');
})->middleware(['auth', App\Http\Middleware\IsAdmin::class]);
