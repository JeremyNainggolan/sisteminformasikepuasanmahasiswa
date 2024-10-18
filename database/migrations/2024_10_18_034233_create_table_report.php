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
        Schema::create('reports', function (Blueprint $table) {
            $table->id(); // ID Laporan
            $table->string('name'); // Nama Mahasiswa
            $table->string('email'); // Nama Mahasiswa
            $table->string('comment'); // Nama Mahasiswa
            $table->tinyInteger('rating'); // Komentar dan Saran
            $table->enum('kategori', ['keasramaan', 'kemahasiswaan', 'kantin']); // Kategori
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
