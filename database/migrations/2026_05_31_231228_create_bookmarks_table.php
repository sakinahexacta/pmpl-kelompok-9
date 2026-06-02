<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bookmarks', function (Blueprint $table) {
            $table->id();

            $table->foreignId('id_user')
                  ->constrained('users')
                  ->onDelete('cascade');

            $table->unsignedBigInteger('id_istilah');

            $table->foreign('id_istilah')
                  ->references('id_istilah')
                  ->on('terms')
                  ->onDelete('cascade');

            $table->foreignId('id_folder')
                  ->nullable()
                  ->constrained('folders')
                  ->onDelete('set null');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bookmarks');
    }
};