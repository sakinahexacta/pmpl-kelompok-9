<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Folder;

class FolderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Folder::create([
            'nama_folder' => 'Istilah Pemrograman'
        ]);

        Folder::create([
            'nama_folder' => 'Istilah UI/UX Design'
        ]);

        Folder::create([
            'nama_folder' => 'Istilah Jaringan Komputer'
        ]);

        Folder::create([
            'nama_folder' => 'Istilah Keamanan Siber'
        ]);

        Folder::create([
            'nama_folder' => 'Istilah Komputasi Awan'
        ]);

        Folder::create([
            'nama_folder' => 'Istilah Basis Data'
        ]);
    }
}
