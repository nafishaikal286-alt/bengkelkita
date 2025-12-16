@extends('layouts.app')
@section('title','Dashboard Admin')

@section('content')

<style>
    body{
        margin:0;
        font-family:Arial,sans-serif;
        background:#f4f4f4;
    }
    .container{
        max-width:1000px;
        margin:auto;
        padding:20px;
    }
    h1{
        margin-bottom:20px;
    }
    .stats{
        display:grid;
        grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
        gap:20px;
    }
    .card{
        background:#fff;
        padding:20px;
        border-radius:10px;
        box-shadow:0 2px 5px rgba(0,0,0,0.1);
    }
    .card h3{
        font-size:16px;
        margin-bottom:10px;
        color:#555;
    }
    .card p{
        font-size:26px;
        font-weight:bold;
        color:#333;
    }
</style>

<div class="container">
    <h1>Dashboard Admin</h1>

    <div class="stats">
        <div class="card">
            <h3>Total User</h3>
            <p>{{ $totalUsers }}</p>
        </div>

        <div class="card">
            <h3>Total Booking</h3>
            <p>{{ $totalBookings }}</p>
        </div>

        <div class="card">
            <h3>Total Services</h3>
            <p>{{ $totalServices }}</p>
        </div>
    </div>
</div>

@endsection
