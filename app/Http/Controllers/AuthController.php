<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
{
    $request->validate([
        'nama_panggilan' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6',
        'tanggal_lahir' => 'required|date',
        'no_hp' => 'required'
    ]);

    $user = User::create([
        'nama_panggilan' => $request->nama_panggilan,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'negara' => 'Indonesia',
        'kode_negara' => '+62',
        'tanggal_lahir' => $request->tanggal_lahir,
        'no_hp' => $request->no_hp,
        'role' => 'user'
    ]);

    Auth::login($user);
    return redirect()->route('home');
}


    public function login(Request $request)
    {
        if (Auth::attempt($request->only('email','password'))) {
            return Auth::user()->role === 'admin'
                ? redirect()->route('admin.dashboard')
                : redirect()->route('home');
        }

        return back()->withErrors(['email' => 'Login gagal']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
