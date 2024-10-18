@extends('layouts/user-app')

@section('title', 'Keasramaan')

@section('content')
    <x-navbar></x-navbar>

    <div class="container mt-5">
        <!-- Bagian Detail Keasramaan -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5>Detail Keasramaan</h5>
                    </div>
                    <div class="card-body">
                        <p>Keasramaan di kampus kami menyediakan berbagai fasilitas dan layanan untuk mahasiswa:</p>
                        <ul>
                            <li><strong>Kamar Tidur:</strong> Tersedia kamar tidur dengan opsi kamar pribadi atau bersama, sesuai dengan kebijakan keasramaan.</li>
                            <li><strong>Ruang Belajar:</strong> Ruang belajar yang nyaman disediakan untuk mendukung kegiatan belajar mahasiswa.</li>
                            <li><strong>Fasilitas Rekreasi:</strong> Area rekreasi yang menyenangkan untuk bersantai dan bersosialisasi dengan teman-teman.</li>
                            <li><strong>Kebersihan Terjaga:</strong> Kami menjaga kebersihan area keasramaan agar selalu nyaman dan higienis.</li>
                            <li><strong>Keamanan:</strong> Keamanan asrama dijaga 24 jam untuk memberikan rasa aman bagi semua penghuni.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Info Tambahan -->
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="alert alert-info">
                    Untuk informasi lebih lanjut mengenai layanan keasramaan, silakan hubungi pihak pengelola asrama.
                </div>
            </div>
        </div>
    </div>
@endsection
