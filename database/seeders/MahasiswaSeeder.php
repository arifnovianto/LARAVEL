<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        Mahasiswa::create(['nama' => 'Arif Novianto', 'jurusan' => 'Teknik Informatika', 'angkatan' => '2022']);
        Mahasiswa::create(['nama' => 'Budi Santoso',  'jurusan' => 'Sistem Informasi',   'angkatan' => '2022']);
        Mahasiswa::create(['nama' => 'Citra Dewi',    'jurusan' => 'Teknik Komputer',    'angkatan' => '2023']);
    }
}
