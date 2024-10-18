@extends('layouts/user-app')

@section('title', 'Kantin')

@section('content')
    <x-navbar></x-navbar>

    <div class="container mt-5">
        <!-- Bagian Detail Kantin -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5>Detail Kantin</h5>
                    </div>
                    <div class="card-body">
                        <p>Kantin di kampus kami menyediakan berbagai fasilitas dan layanan untuk mahasiswa:</p>
                        <ul>
                            <li><strong>Lingkungan Nyaman:</strong> Kantin kami dirancang untuk memberikan suasana yang nyaman bagi mahasiswa untuk makan dan bersosialisasi.</li>
                            <li><strong>Kebersihan Terjaga:</strong> Kami selalu menjaga kebersihan kantin dan memastikan semua area bersih dan higienis.</li>
                            <li><strong>Pelayanan Cepat:</strong> Layanan di kantin kami cepat dan efisien, sehingga mahasiswa dapat menikmati makanan mereka tanpa harus menunggu lama.</li>
                            <li><strong>Tempat Duduk Luas:</strong> Tersedia berbagai pilihan tempat duduk yang dapat menampung individu maupun kelompok.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Info Tambahan -->
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="alert alert-info">
                    Untuk informasi lebih lanjut mengenai layanan kantin, silakan hubungi pihak pengelola kantin.
                </div>
            </div>
        </div>
    </div>
@endsection