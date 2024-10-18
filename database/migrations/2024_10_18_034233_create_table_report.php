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
            $table->string('student_name'); // Nama Mahasiswa
            $table->unsignedTinyInteger('overall_rating'); // Rating Keseluruhan (1-5)
            $table->text('comments_suggestions'); // Komentar dan Saran
            $table->kategori(); // Kategori 
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
