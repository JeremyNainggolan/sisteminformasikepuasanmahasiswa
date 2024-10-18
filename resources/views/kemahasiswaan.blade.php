@extends('layouts/user-app')

@section('title', 'Kemahasiswaan')

@section('content')
    <x-navbar></x-navbar>

    <div class="container mt-5">
        <!-- Bagian Peraturan Akademik -->
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5>Peraturan Akademik</h5>
                    </div>
                    <div class="card-body">
                        <p>Beberapa peraturan akademik yang perlu diketahui oleh seluruh mahasiswa:</p>
                        <ul>
                            <li>Mahasiswa wajib hadir minimal 75% dari total pertemuan untuk dapat mengikuti ujian akhir.</li>
                            <li>Pengajuan cuti akademik hanya dapat dilakukan maksimal satu kali dalam masa studi.</li>
                            <li>Tidak diperbolehkan melakukan plagiarisme dalam bentuk apapun pada tugas atau ujian.</li>
                            <li>Setiap mahasiswa diwajibkan untuk menyelesaikan minimal 144 SKS untuk lulus.</li>
                            <li>Jadwal pengambilan KRS (Kartu Rencana Studi) dilakukan setiap semester dan harus dilakukan sebelum masa perkuliahan dimulai.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Bagian Event Kampus -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-success text-white">
                        <h5>Event-Event Kampus</h5>
                    </div>
                    <div class="card-body">
                        <p>Beberapa event yang akan diadakan dalam waktu dekat:</p>
                        <ul>
                            <li><strong>Seminar Teknologi Informasi</strong> - Tanggal: 25 Oktober 2024</li>
                            <li><strong>Workshop Kewirausahaan</strong> - Tanggal: 30 Oktober 2024</li>
                            <li><strong>Kompetisi Debat Mahasiswa</strong> - Tanggal: 5 November 2024</li>
                            <li><strong>Acara Donor Darah</strong> - Tanggal: 12 November 2024</li>
                            <li><strong>Pentas Seni Kampus</strong> - Tanggal: 20 November 2024</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Info Tambahan -->
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="alert alert-info">
                    Untuk informasi lebih lanjut mengenai peraturan akademik dan pendaftaran event, silakan hubungi Biro Kemahasiswaan.
                </div>
            </div>
        </div>
    </div>
@endsection
