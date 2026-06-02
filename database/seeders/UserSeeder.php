<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function up(): void {}

    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin1@gmail.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin'
        ]);

        User::create([
            'name' => 'Pengguna',
            'username' => 'tupaikidal',
            'email' => 'tupaikidal@gmail.com',
            'password' => Hash::make('Kambingguling_001'),
            'role' => 'pengguna'
        ]);
    }
}