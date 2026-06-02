<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HistorySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('histories')->insert([
            [
                'id_user'    => 1,
                'id_istilah' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_user'    => 1,
                'id_istilah' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}