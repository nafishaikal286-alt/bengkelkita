@extends('layouts.app')

@section('content')
<h2>Profil Saya</h2>

<p><strong>Nama:</strong> {{ auth()->user()->name }}</p>
<p><strong>Email:</strong> {{ auth()->user()->email }}</p>

<a href="{{ url('/profile/edit') }}" class="btn btn-warning">Edit Profil</a>
@endsection
