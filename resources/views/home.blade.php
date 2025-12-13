@extends('layouts.app')
@section('title','BengkelKita - Home')

@section('content')

<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background: #f4f4f4;
    }

    .container {
        max-width: 430px;
        margin: auto;
        background: #fff;
        padding-bottom: 90px;
    }

    .search-box {
        padding: 15px;
        background: #8f96a3;
    }

    .search {
        background: #fff;
        border-radius: 10px;
        padding: 10px;
        display: flex;
        justify-content: space-between;
        font-size: 13px;
    }

    .banner img {
        width: 100%;
        height: auto;
    }

    .content {
        padding: 15px;
    }

    .content p {
        font-size: 14px;
        line-height: 1.6;
        color: #333;
    }

    .cards {
        display: flex;
        gap: 10px;
        margin-top: 15px;
    }

    .card {
        width: 50%;
        background: #f5f5f5;
        border-radius: 10px;
        overflow: hidden;
    }

    .card img {
        width: 100%;
        height: 110px;
        object-fit: cover;
    }

    .card-body {
        padding: 10px;
    }

    .card-body h4 {
        font-size: 13px;
        margin-bottom: 10px;
    }

    .card-body button {
        padding: 8px 12px;
        background: #9fa4aa;
        border: none;
        border-radius: 15px;
        color: #fff;
        font-size: 12px;
    }

    /* Bottom Nav */
    .bottom-nav {
        position: fixed;
        bottom: 0;
        width: 100%;
        max-width: 430px;
        background: #9fa4aa;
        display: flex;
        justify-content: space-around;
        padding: 10px 0;
        color: #fff;
        font-size: 12px;
        left: 50%;
        transform: translateX(-50%);
    }

    .bottom-nav a {
        color: #fff;
        text-decoration: none;
        display: flex;
        flex-direction: column;
        align-items: center;
        font-size: 12px;
    }
</style>

<div class="container">

    <!-- Search -->
    <div class="search-box">
        <div class="search">
            <div>📍 Sleman Sembada</div>
            <div>📅 12/07/2025</div>
        </div>
    </div>

    <!-- Banner -->
    <div class="banner">
        <img src="{{ asset('assets/img/banner-motor.jpeg') }}" alt="Banner">
    </div>

    <!-- Content -->
    <div class="content">
        <p>
            Merawat motor kini jadi lebih mudah bersama BengkelKita!
            Tinggal booking, pilih jadwal, datang — motor langsung ditangani
            mekanik profesional tanpa harus menunggu lama.
            Praktis, cepat, terpercaya!
        </p>

        <div class="cards">
            <div class="card">
                <img src="{{ asset('assets/img/bengkel1.jpeg') }}" alt="">
                <div class="card-body">
                    <h4>10 Nominasi bengkel terbaik di Indonesia</h4>
                    <button>Learn More</button>
                </div>
            </div>

            <div class="card">
                <img src="{{ asset('assets/img/bengkel2.jpeg') }}" alt="">
                <div class="card-body">
                    <h4>Layanan gratis service akhir tahun</h4>
                    <button>Learn More</button>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Bottom Navigation -->
<div class="bottom-nav">
    <a href="{{ route('home') }}">
        🏠
        <span>Home</span>
    </a>

    <a href="{{ route('booking') }}">
        📅
        <span>Booking</span>
    </a>

    <a href="#">
        📩
        <span>Inbox</span>
    </a>

    <a href="#">
        👤
        <span>Profile</span>
    </a>
</div>

@endsection