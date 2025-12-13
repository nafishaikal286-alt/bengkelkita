@extends('layouts.app')

@section('content')
<h2>{{ $service->name }}</h2>

<p>{{ $service->description }}</p>
<p><strong>Harga:</strong> Rp {{ number_format($service->price) }}</p>
<p><strong>Durasi:</strong> {{ $service->duration_minutes }} menit</p>

<a href="{{ url('/bookings/create?service_id='.$service->id) }}" class="btn btn-success">
    Booking Sekarang
</a>
@endsection
