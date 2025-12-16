@extends('layouts.app')
@section('title','Inbox')

@section('content')

<style>
.page-content {
    padding-bottom: 90px; /* PENTING supaya tidak ketutup navbar */
}

.inbox-card {
    background:#f3f4f6;
    padding:15px;
    border-radius:12px;
    margin-top:15px;
}

.inbox-title {
    font-weight:600;
}

.inbox-text {
    font-size:14px;
    margin-top:5px;
}

.inbox-time {
    font-size:12px;
    color:#666;
    margin-top:6px;
}
</style>

<div class="page-content">

    <!-- Header -->
    <div style="padding:15px; display:flex; align-items:center;">
        <a href="{{ route('home') }}" style="text-decoration:none;font-size:18px;">⬅</a>
        <h3 style="margin:auto;">INBOX</h3>
    </div>

    <div style="max-width:800px;margin:0 auto;padding:15px;">

        <div class="inbox-card">
            <div class="inbox-title">Booking Berhasil</div>
            <div class="inbox-text">
                Booking service Anda berhasil dilakukan. Silakan datang sesuai jadwal.
            </div>
            <div class="inbox-time">{{ date('d M Y') }}</div>
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
    z-index:999;
">
    <a href="{{ route('home') }}" style="color:#fff;text-decoration:none;">Home</a>
    <a href="{{ route('booking') }}" style="color:#fff;text-decoration:none;">
    Booking
</a>


    <a href="#" style="color:#fff;text-decoration:none;">Profile</a>
</div>

@endsection
