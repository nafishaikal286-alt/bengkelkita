@extends('layouts.app')
@section('title','BengkelKita - Home')

@section('content')

<style>
<<<<<<< HEAD
    body{margin:0;font-family:Arial,sans-serif;background:#f4f4f4;}
    .container{max-width:430px;margin:auto;background:#fff;padding-bottom:90px;}
    .search-box{padding:15px;background:#8f96a3;}
    .search{background:#fff;border-radius:10px;padding:10px;display:flex;justify-content:space-between;font-size:13px;}
    .banner img{width:100%;height:auto;}
    .content{padding:15px;}
    .content p{font-size:14px;line-height:1.6;color:#333;}
    .cards{display:flex;gap:10px;margin-top:15px;}
    .card{width:50%;background:#f5f5f5;border-radius:10px;overflow:hidden;}
    .card img{width:100%;height:110px;object-fit:cover;}
    .card-body{padding:10px;}
    .card-body h4{font-size:13px;margin-bottom:10px;}
    .card-body button{padding:8px 12px;background:#9fa4aa;border:none;border-radius:15px;color:#fff;font-size:12px;}

    .bottom-nav{
        position:fixed;
        bottom:0;
        width:100%;
        max-width:430px;
        background:#9fa4aa;
        display:flex;
        justify-content:space-around;
        padding:10px 0;
        color:#fff;
        font-size:12px;
        left:50%;
        transform:translateX(-50%);
    }
    .bottom-nav a{
        color:#fff;
        text-decoration:none;
        display:flex;
        flex-direction:column;
        align-items:center;
        font-size:12px;
    }
</style>

<div class="container">

    <!-- Search -->
    <div class="search-box">
        <div class="search">
            <div>📍 Sleman Sembada</div>
            <div>📅 {{ date('d/m/Y') }}</div>
        </div>
=======
body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: #f4f4f4;
}

/* ===== NAVBAR ATAS ===== */
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
}

.navbar-top a {
    color: #fff;
    text-decoration: none;
    margin-left: 20px;
    font-weight: 500;
}

/* ===== CONTAINER ===== */
.wrapper {
    max-width: 1200px;
    margin: 30px auto;
    background: #fff;
    border-radius: 8px;
    overflow: hidden;
}

/* ===== FOTO ATAS ===== */
.hero img {
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
    margin-bottom: 30px;
}

/* ===== 2 FOTO ===== */
.gallery {
    display: grid;
    grid-template-columns: 1fr 1fr;
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

.card button {
    padding: 8px 16px;
    border: none;
    border-radius: 20px;
    background: #8f96a3;
    color: #fff;
    cursor: pointer;
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
>>>>>>> 11362fe1d4edeaff364ce0e18067e678311dc49b
    </div>
</div>

<!-- ===== ISI ===== -->
<div class="wrapper">




    <!-- TEKS -->

    <!-- Banner -->
    <div class="banner">
        <img src="{{ asset('assets/img/benner.jpeg') }}" alt="Banner">
    </div>

    <!-- Content -->

    <div class="content">
        <p>
<<<<<<< HEAD
            Selamat datang <b>{{ auth()->user()->name }}</b> 👋 <br>
            Merawat motor kini jadi lebih mudah bersama BengkelKita!
            Tinggal booking, pilih jadwal, datang — motor langsung ditangani
            mekanik profesional tanpa harus menunggu lama.
            Praktis, cepat, terpercaya!
=======
            BengkelKita memudahkan Anda melakukan booking service motor secara online.
            Pilih jadwal, datang ke bengkel, dan motor langsung ditangani mekanik
            profesional tanpa antre lama.
>>>>>>> 11362fe1d4edeaff364ce0e18067e678311dc49b
        </p>

        <!-- 2 FOTO -->
        <div class="gallery">
            <div class="card">

                <img src="{{ asset('assets/img/bengkel1.jpg') }}">
                <div>
                    <h4>Bengkel Terbaik</h4>
                    <h4>10 Nominasi bengkel terbaik di Indonesia</h4>
                    <button>Learn More</button>

                </div>
            </div>

            <div class="card">

                <img src="{{ asset('assets/img/bengkel2.jpg') }}">
                <div>
                    <h4>Promo Service</h4>
                    <h4>Layanan gratis service akhir tahun</h4>
                    <button>Learn More</button>


                
                </div>
            </div>
        </div>
    </div>

</div>

<<<<<<< HEAD
<!-- Bottom Navigation -->
<div class="bottom-nav">
    <a href="{{ route('home') }}">
        🏠
        <span>Home</span>
    </a>

    <a href="{{ route('booking') ?? '#' }}">
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

=======
>>>>>>> 11362fe1d4edeaff364ce0e18067e678311dc49b
@endsection
