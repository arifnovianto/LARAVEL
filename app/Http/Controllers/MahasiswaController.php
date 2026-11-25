<?php

namespace App\Http\Controllers;

class MahasiswaController extends Controller
{
    public function index()
    {
        // Simulasi data dari database
        $mahasiswa = [
            ['nama' => 'Arif',  'jurusan' => 'Teknik Informatika'],
            ['nama' => 'Budi',  'jurusan' => 'Sistem Informasi'],
            ['nama' => 'Citra', 'jurusan' => 'Teknik Komputer'],
        ];

        // Kirim data ke View
        return view('mahasiswa', ['mahasiswa' => $mahasiswa]);
    }
}
