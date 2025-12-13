@extends('layouts.app')
@section('title','BengkelKita - Home')

@section('content')

<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background: #f4f4f4;
    }

    /* ===== NAVBAR ===== */
    .navbar {
        background: #8f96a3;
        padding: 15px 40px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        color: #fff;
    }

    .navbar .logo {
        font-size: 20px;
        font-weight: bold;
    }

    .navbar ul {
        list-style: none;
        display: flex;
        gap: 25px;
        margin: 0;
        padding: 0;
    }

    .navbar ul li a {
        color: #fff;
        text-decoration: none;
        font-size: 14px;
        font-weight: 500;
    }

    .navbar ul li a:hover {
        text-decoration: underline;
    }

    /* ===== MAIN CONTAINER ===== */
    .container {
        max-width: 1200px;
        margin: 30px auto;
        background: #fff;
        border-radius: 8px;
        overflow: hidden;
    }

    /* ===== SEARCH BAR ===== */
    .search-box {
        padding: 20px 30px;
        background: #f0f0f0;
        display: flex;
        justify-content: space-between;
        font-size: 14px;
    }

    /* ===== BANNER ===== */
    .banner img {
        width: 100%;
        height: 320px;
        object-fit: cover;
    }

    /* ===== CONTENT ===== */
    .content {
        padding: 30px;
    }

    .content p {
        font-size: 15px;
        line-height: 1.8;
        color: #333;
        max-width: 800px;
    }

    /* ===== CARDS ===== */
    .cards {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
        margin-top: 30px;
    }

    .card {
        background: #f5f5f5;
        border-radius: 10px;
        overflow: hidden;
        transition: 0.3s;
    }

    .card:hover {
        transform: translateY(-4px);
    }

    .card img {
        width: 100%;
        height: 180px;
        object-fit: cover;
    }

    .card-body {
        padding: 15px;
    }

    .card-body h4 {
        font-size: 15px;
        margin-bottom: 12px;
    }

    .card-body button {
        padding: 8px 18px;
        background: #9fa4aa;
        border: none;
        border-radius: 20px;
        color: #fff;
        font-size: 13px;
        cursor: pointer;
    }
</style>

<!-- ===== NAVBAR ===== -->
<div class="navbar">
    <div class="logo">BengkelKita</div>
    <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('booking') }}">Booking</a></li>
        <li><a href="#">Inbox</a></li>
        <li><a href="#">Profile</a></li>
    </ul>
</div>

<!-- ===== CONTENT ===== -->
<div class="container">

    <!-- Search -->
    <div class="search-box">
        <div>📍 Sleman Sembada</div>
        <div>📅 12/07/2025</div>
    </div>

    <!-- Banner -->
    <div class="banner">
        <img src="{{ asset('assets/img/banner-motor.jpg') }}" alt="Banner">
    </div>

    <!-- Text & Cards -->
    <div class="content">
        <p>
            Merawat motor kini jadi lebih mudah bersama BengkelKita.
            Booking layanan secara online, pilih jadwal sesuai kebutuhan,
            dan motor Anda langsung ditangani oleh mekanik profesional
            tanpa antre lama. Praktis, cepat, dan terpercaya.
        </p>

        <div class="cards">
            <div class="card">
                <img src="{{ asset('assets/img/bengkel1.jpg') }}" alt="">
                <div class="card-body">
                    <h4>10 Nominasi Bengkel Terbaik di Indonesia</h4>
                    <button>Learn More</button>
                </div>
            </div>

            <div class="card">
                <img src="{{ asset('assets/img/bengkel2.jpg') }}" alt="">
                <div class="card-body">
                    <h4>Layanan Gratis Service Akhir Tahun</h4>
                    <button>Learn More</button>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
