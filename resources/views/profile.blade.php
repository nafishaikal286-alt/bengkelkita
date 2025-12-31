@extends('layouts.app')
@section('title','Profile')

@section('content')

<div style="max-width:600px;margin:40px auto;background:#fff;padding:25px;border-radius:12px">

    <h2 style="text-align:center;">Profil Saya</h2>

    <div style="margin-top:20px;">
        <p><strong>Nama:</strong></p>
        <div style="padding:10px;background:#f1f1f1;border-radius:8px;">
            {{ $user->name }}
        </div>

        <p style="margin-top:15px;"><strong>Email:</strong></p>
        <div style="padding:10px;background:#f1f1f1;border-radius:8px;">
            {{ $user->email }}
        </div>
    </div>

    <form action="{{ route('logout') }}" method="POST" style="margin-top:25px;">
        @csrf
        <button type="submit"
            style="width:100%;padding:12px;border:none;border-radius:20px;background:#6b7280;color:#fff;">
            Logout
        </button>
    </form>

</div>

@endsection
