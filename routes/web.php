<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route Utama (Landing Page)
Route::get('/', function () {
    return view('welcome');
});

// Route Admin Dashboard
Route::get('/admin', [AdminController::class, 'dashboard']);

// Resource Routes untuk Services (CRUD)
Route::resource('services', ServiceController::class);

Route::get('/login', function () {
    return view('bengkelkita.login');
});

Route::get('/', fn () => view('bengkelkita.splash'));

Route::get('/register', fn () => view('bengkelkita.register'));

