@extends('layouts.app')
@section('title','Booking Service')

@section('content')

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

        <img src="{{ asset('assets/img/logo-bengkelkita.png') }}"
             style="width:120px; display:block; margin:0 auto 15px; opacity:0.4;">

        <label>Vehicle</label>
        <input type="text" style="width:100%;padding:12px;margin:8px 0 15px;border-radius:10px;border:none;">

        <label>Full Name</label>
        <input type="text" style="width:100%;padding:12px;margin:8px 0 15px;border-radius:10px;border:none;">

        <label>Phone Number</label>
        <input type="text" style="width:100%;padding:12px;margin:8px 0 15px;border-radius:10px;border:none;">

        <label>No Antrian</label>
        <input type="text" value="A001" disabled
               style="width:100%;padding:12px;margin:8px 0 20px;
               border-radius:10px;border:none;text-align:center;font-weight:bold;">

        <button style="
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
">
    <a href="{{ route('home') }}" style="color:#fff;text-decoration:none;">Home</a>
    <strong>Booking</strong>
    <span>Inbox</span>
    <span>Profile</span>
</div>

@endsection