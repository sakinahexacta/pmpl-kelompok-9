<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('terms', function (Blueprint $table) {
            $table->id('id_istilah');
<<<<<<< Updated upstream
            $table->string('nama_istilah');
            $table->text('definisi');
=======

            $table->string('nama_istilah', 500);
            $table->string('pelafalan', 500)->nullable();
            $table->string('singkatan', 100)->nullable();
            $table->string('asal_bahasa', 50)->nullable();
            $table->string('kategori_utama', 500);
            $table->string('sub_kategori', 500)->nullable();

            $table->text('definisi');
            $table->text('penjelasan');
            $table->string('gambar', 500)->nullable();

>>>>>>> Stashed changes
            $table->unsignedBigInteger('id_kategori');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('terms');
    }
};
