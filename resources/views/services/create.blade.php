@extends('layouts.app')

@section('content')
<h2>Form Booking</h2>

<form method="POST" action="{{ url('/bookings') }}">
    @csrf

    <div class="mb-3">
        <label>Tanggal Booking</label>
        <input type="date" name="booking_date" class="form-control" required>
    </div>

    <input type="hidden" name="service_id" value="{{ request('service_id') }}">

    <button class="btn btn-primary">Simpan</button>
</form>
@endsection
