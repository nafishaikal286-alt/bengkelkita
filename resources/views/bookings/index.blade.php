@extends('layouts.app')

@section('content')
<h2>Daftar Layanan</h2>

<table class="table table-bordered">
    <tr>
        <th>Nama</th>
        <th>Harga</th>
        <th>Aksi</th>
    </tr>
    @foreach($services as $service)
    <tr>
        <td>{{ $service->name }}</td>
        <td>Rp {{ number_format($service->price) }}</td>
        <td>
            <a href="{{ url('/services/'.$service->id) }}" class="btn btn-info btn-sm">Detail</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection
