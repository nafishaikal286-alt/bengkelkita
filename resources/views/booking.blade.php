@extends('layouts.app')
@section('title','Booking Service')

@section('content')

<style>
.page-content {
    padding-bottom: 90px; /* ruang untuk bottom nav */
}

.queue-card {
    margin-top: 25px;
    background: #ffffff;
    border-radius: 20px;
    padding: 25px;
    text-align: center;
    box-shadow: 0 10px 30px rgba(0,0,0,0.15);
}

.queue-icon {
    width: 50px;
    height: 50px;
    background: #22c55e;
    color: #fff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    margin: 0 auto 10px;
}

.queue-title {
    font-size: 18px;
    font-weight: 600;
}

.queue-label {
    font-size: 14px;
    color: #666;
}

.queue-number {
    font-size: 46px;
    font-weight: 700;
    color: #4b5563;
    margin: 12px 0;
    letter-spacing: 3px;
}

.queue-note {
    font-size: 13px;
    color: #777;
}
</style>

<div class="page-content">

    <!-- Header -->
    <div style="padding:15px; display:flex; align-items:center;">
        <a href="{{ route('home') }}" style="text-decoration:none; font-size:18px;">⬅</a>
        <h3 style="margin:auto;">BOOKING SERVICE</h3>
    </div>

    <!-- Card -->
    <div style="padding:15px;">
        <div style="
            background:#e0e0e0;
            border-radius:20px;
            padding:20px;
            box-shadow:0 6px 10px rgba(0,0,0,0.15);
        ">

            <img src="{{ asset('assets/img/bengkelkita-logo.jpeg') }}"
                 style="width:120px; display:block; margin:0 auto 15px; opacity:0.4;">

            <form action="{{ route('booking.store') }}" method="POST">
                @csrf

                <label>Vehicle</label>
                <input type="text" name="vehicle" required
                       style="width:100%;padding:12px;margin:8px 0 15px;border-radius:10px;border:none;">

                <label>Full Name</label>
                <input type="text" name="full_name" required
                       style="width:100%;padding:12px;margin:8px 0 15px;border-radius:10px;border:none;">

                <label>Phone Number</label>
                <input type="text" name="phone_number" required
                       style="width:100%;padding:12px;margin:8px 0 15px;border-radius:10px;border:none;">

                <button type="submit" style="
                    width:100%;
                    padding:14px;
                    border-radius:25px;
                    border:none;
                    background:#8f96a3;
                    color:#fff;
                    font-weight:bold;
                    font-size:15px;
                ">
                    BOOK SERVICE
                </button>
            </form>

            @if(session('success'))
            <div class="queue-card">
                <div class="queue-icon">✔</div>
                <p class="queue-title">Booking Berhasil!</p>
                <p class="queue-label">Nomor Antrian Anda</p>
                <div class="queue-number">
                    {{ session('queue') }}
                </div>
                <p class="queue-note">
                    Silakan menunggu, kami akan segera melayani kendaraan Anda.
                </p>
            </div>
            @endif

        </div>
    </div>

</div>

<!-- Bottom Navigation -->
<div style="
    position:fixed;
    bottom:0;
    width:100%;
    max-width:1000px;
    background:#9fa4aa;
    color:#fff;
    display:flex;
    justify-content:space-around;
    padding:10px;
    z-index:1000;
">
    <a href="{{ route('home') }}" style="color:#fff;text-decoration:none;">Home</a>
    <strong>Booking</strong>
   <a href="{{ route('inbox') }}" style="color:#fff;text-decoration:none;">Inbox</a>

    <a href="#" style="color:#fff;text-decoration:none;">Profile</a>
</div>

@endsection
