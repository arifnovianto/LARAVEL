<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Buat akun admin
        User::create([
            'name'     => 'Admin',
            'email'    => 'admin@gmail.com',
            'password' => Hash::make('password123'),
            'role'     => 'admin',
        ]);

        // Buat akun user biasa
        User::create([
            'name'     => 'Arif Novianto',
            'email'    => 'arif@gmail.com',
            'password' => Hash::make('password123'),
            'role'     => 'user',
        ]);
    }
}
