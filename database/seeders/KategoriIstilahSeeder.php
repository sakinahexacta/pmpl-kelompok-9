<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\KategoriIstilah;

class KategoriIstilahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        KategoriIstilah::create([
            'nama_kategori' => 'Pemrograman'
        ]);

        KategoriIstilah::create([
            'nama_kategori' => 'UI/UX Design'
        ]);

        KategoriIstilah::create([
            'nama_kategori' => 'Jaringan Komputer'
        ]);

        KategoriIstilah::create([
            'nama_kategori' => 'Keamanan Siber'
        ]);

        KategoriIstilah::create([
            'nama_kategori' => 'Kompuetasi Awan'
        ]);

        KategoriIstilah::create([
            'nama_kategori' => 'Basis Data'
        ]);

    }
}
