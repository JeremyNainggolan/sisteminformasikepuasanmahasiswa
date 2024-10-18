<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Report extends Model
{
    use HasFactory;

    protected $table = "reports";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'student_name',           // Nama Mahasiswa
        'overall_rating',         // Rating Keseluruhan (1-5)
        'report_type',            // Tipe Laporan (komplain, pujian, saran perbaikan)
        'comments_suggestions',   // Komentar dan Saran
        'kategori',           // Kategori(Keasrmaan, Kemahasiswaan, Kantin)
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'report_date' => 'datetime',    // Cast Tanggal Pengisian Laporan as datetime
            'feedback_count' => 'integer',  // Cast Jumlah Feedback as integer
        ];
    }

    /**
     * Get the report type (komplain, pujian, saran perbaikan).
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function reportType(): Attribute
    {
        return new Attribute(
            get: fn($value) => ['komplain', 'pujian', 'saran'][$value],
        );
    }

    /**
     * Get the report status (belum ditangani, dalam proses, sudah ditangani).
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function reportStatus(): Attribute
    {
        return new Attribute(
            get: fn($value) => ['belum ditangani', 'dalam proses', 'sudah ditangani'][$value],
        );
    }
}
