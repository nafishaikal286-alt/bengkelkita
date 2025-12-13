@extends('layouts.app')
@section('title','Inbox')

@section('content')
<div style="max-width:800px;margin:40px auto;background:#fff;padding:25px;border-radius:10px;">

    <h2>Inbox</h2>
    <p>Notifikasi terbaru dari BengkelKita</p>

    <div style="background:#f0f0f0;padding:15px;border-radius:8px;margin-top:15px;">
        <strong>Booking Berhasil</strong>
        <p>Booking service Anda berhasil dilakukan. Silakan datang sesuai jadwal.</p>
        <small>{{ date('d M Y') }}</small>
    </div>

</div>
@endsection
