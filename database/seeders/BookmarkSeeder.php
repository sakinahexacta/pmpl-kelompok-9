<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bookmark;

class BookmarkSeeder extends Seeder
{
    public function run(): void
    {
        Bookmark::create([
            'id_user'    => 1,
            'id_istilah' => 1,
            'id_folder'  => null,
        ]);

        Bookmark::create([
            'id_user'    => 1,
            'id_istilah' => 2,
            'id_folder'  => 1,
        ]);

        Bookmark::create([
            'id_user'    => 1,
            'id_istilah' => 3,
            'id_folder'  => 1,
        ]);
    }
}