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
    .navbar-top {
        background: #8f96a3;
        color: #fff;
        padding: 15px 40px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .navbar-top h2 {
        margin: 0;
        font-size: 22px;
    }

    .navbar-top a {
        color: #fff;
        text-decoration: none;
        margin-left: 24px;
        font-weight: 500;
        font-size: 15px;
    }

    .navbar-top a:hover {
        text-decoration: underline;
    }

    /* ===== WRAPPER ===== */
    .wrapper {
        max-width: 1200px;
        margin: 30px auto;
        background: #fff;
        border-radius: 8px;
        overflow: hidden;
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
        font-size: 16px;
        line-height: 1.7;
        color: #333;
        margin-bottom: 30px;
    }

    /* ===== CARD ===== */
    .gallery {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 20px;
    }

    .card {
        background: #f2f2f2;
        border-radius: 10px;
        overflow: hidden;
    }

    .card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .card div {
        padding: 15px;
    }

    .card h4 {
        margin-bottom: 6px;
        font-size: 16px;
    }

    .card p {
        font-size: 14px;
        margin-bottom: 12px;
        color: #555;
    }

    .card button {
        padding: 8px 18px;
        border: none;
        border-radius: 20px;
        background: #8f96a3;
        color: #fff;
        cursor: pointer;
        font-size: 14px;
    }

    .card button:hover {
        background: #7f8693;
    }

    /* ===== BOTTOM NAV (MOBILE) ===== */
    .bottom-nav {
        position: fixed;
        bottom: 0;
        width: 100%;
        background: #9fa4aa;
        display: flex;
        justify-content: space-around;
        padding: 12px 0;
    }

    .bottom-nav a {
        color: #fff;
        text-decoration: none;
        font-size: 13px;
    }

    @media (min-width: 768px) {
        .bottom-nav {
            display: none;
        }
    }
</style>

<!-- ===== NAVBAR ===== -->
<div class="navbar-top">
    <h2>BengkelKita</h2>
    <div>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('booking') }}">Booking</a>
        <a href="{{ route('inbox') }}">Inbox</a>
        <a href="{{ route('profile') }}">Profile</a>
    </div>
</div>

<!-- ===== CONTENT ===== -->
<div class="wrapper">

    <div class="banner">
        <img src="{{ asset('assets/img/benner.jpeg') }}" alt="Banner BengkelKita">
    </div>

    <div class="content">
        <p>
    Selamat datang
    <b>{{ auth()->check() ? auth()->user()->name : 'Pengguna' }}</b>.<br>
    Merawat motor kini menjadi lebih mudah bersama BengkelKita.
    Booking service tanpa antre, cepat, dan terpercaya.
</p>


        <div class="gallery">
            <div class="card">
                <img src="{{ asset('assets/img/bengkel1.jpg') }}" alt="Bengkel Terbaik">
                <div>
                    <h4>Bengkel Terbaik</h4>
                    <p>10 nominasi bengkel terbaik di Indonesia.</p>
                    <button>Learn More</button>
                </div>
            </div>

            <div class="card">
                <img src="{{ asset('assets/img/bengkel2.jpg') }}" alt="Promo Service">
                <div>
                    <h4>Promo Service</h4>
                    <p>Gratis layanan service akhir tahun.</p>
                    <button>Learn More</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ===== MOBILE NAV ===== -->
<div class="bottom-nav">
    <a href="{{ route('home') }}">Home</a>
    <a href="{{ route('booking') }}">Booking</a>
    <a href="{{ route('inbox') }}">Inbox</a>
    <a href="{{ route('profile') }}">Profile</a>
</div>

@endsection
