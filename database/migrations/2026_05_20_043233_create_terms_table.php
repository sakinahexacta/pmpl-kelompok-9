<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('terms', function (Blueprint $table) {
            $table->id('id_istilah');

            $table->string('nama_istilah', 50);
            $table->string('pelafalan', 50)->nullable();
            $table->string('singkatan', 50)->nullable();
            $table->string('asal_bahasa', 50)->nullable();
            $table->string('kategori_utama', 50);
            $table->string('sub_kategori', 50)->nullable();

            $table->string('definisi', 100);
            $table->string('penjelasan', 500);
            $table->string('gambar', 50)->nullable();

            $table->unsignedBigInteger('id_kategori');

            $table->foreign('id_kategori')
                  ->references('id_kategori')
                  ->on('kategori_istilahs')
                  ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('terms');
    }
};