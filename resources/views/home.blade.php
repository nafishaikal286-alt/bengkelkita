@extends('layouts.app')
@section('title','BengkelKita - Home')

@section('content')

<style>
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
            BengkelKita memudahkan Anda melakukan booking service motor secara online.
            Pilih jadwal, datang ke bengkel, dan motor langsung ditangani mekanik
            profesional tanpa antre lama.
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

@endsection
