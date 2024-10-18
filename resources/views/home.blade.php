<!-- resources/views/home.blade.php -->
@extends('layouts.user-app')

@section('title', 'Home')

@section('content')
    <style>
        /* Typography */
        h1, h2, h3 {
            font-family: 'Montserrat', sans-serif;
        }
        p {
            font-family: 'Roboto', sans-serif;
        }

        /* Background Style */
        body {
            background: linear-gradient(to bottom right, #2C3E50, #18BC9C);
            color: #2C3E50;
            background-attachment: fixed;
            background-size: cover;
        }
        .content-wrapper {
            background-color: rgba(255, 255, 255, 0.8); /* White background with some transparency */
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            margin-top: 20px;
        }

        /* Color Scheme */
        .primary-color {
            color: #2C3E50;
        }
        .secondary-color {
            color: #18BC9C;
        }
        .accent-color {
            color: #F39C12;
        }
        .btn-primary {
            background-color: #18BC9C;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
        }
        .btn-primary:hover {
            background-color: #16A085;
        }

        /* Grid Layout */
        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin: 20px 0;
        }
        .grid-item {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s;
        }
        .grid-item:hover {
            transform: scale(1.05);
        }

        /* Icon Style */
        .icon {
            font-size: 40px;
            margin-bottom: 10px;
        }
    </style>

    <div class="container">
        <div class="content-wrapper">
            <h1 class="primary-color text-center">Selamat Datang di Sistem Informasi Kepuasan Mahasiswa Institut Teknologi Del</h1>

            <div class="grid-container">
                <div class="grid-item">
                    <i class="fas fa-home accent-color icon"></i>
                    <h3 class="primary-color">Keasramaan</h3>
                    <p>Informasi terkait layanan dan fasilitas di asrama mahasiswa.</p>
                    <button class="btn-primary">Selengkapnya</button>
                </div>
                <div class="grid-item">
                    <i class="fas fa-users accent-color icon"></i>
                    <h3 class="primary-color">Kemahasiswaan</h3>
                    <p>Informasi terkait layanan akademik mahasiswa.</p>
                    <button class="btn-primary">Selengkapnya</button>
                </div>
                <div class="grid-item">
                    <i class="fas fa-utensils accent-color icon"></i>
                    <h3 class="primary-color">Kantin</h3>
                    <p>Informasi terkait layanan kantin.</p>
                    <button class="btn-primary">Selengkapnya</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Link ke FontAwesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
@endsection
