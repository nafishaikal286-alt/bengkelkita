@extends('layouts.app')
@section('title','Profile')

@section('content')
<div style="max-width:600px;margin:40px auto;background:#fff;padding:25px;border-radius:10px;">

    <h2>Profile Saya</h2>

    <label>Nama</label>
    <input type="text" value="{{ auth()->user()->name }}" disabled
           style="width:100%;padding:12px;margin:8px 0 15px;border-radius:10px;border:none;">

    <label>Email</label>
    <input type="text" value="{{ auth()->user()->email }}" disabled
           style="width:100%;padding:12px;margin:8px 0 15px;border-radius:10px;border:none;">

    <a href="{{ route('logout') }}"
       onclick="event.preventDefault();document.getElementById('logout-form').submit();"
       style="display:inline-block;background:#8f96a3;color:#fff;
       padding:10px 20px;border-radius:20px;text-decoration:none;">
        Logout
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
        @csrf
    </form>

</div>
@endsection
