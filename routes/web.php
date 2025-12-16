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
    return view('auth.login');
})->name('login');

Route::post('/login', [AuthController::class, 'login']);

Route::get('/register/profil', function () {
    return view('auth.register-profil');
})->name('register.profil');

Route::post('/register', [AuthController::class, 'register']);

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {

    // Bookings
    Route::get('/bookings', [BookingController::class, 'index'])->name('bookings.index');
    Route::get('/bookings/create', [BookingController::class, 'create'])->name('bookings.create');
    Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');

    // Profile
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
});

Route::middleware(['auth', 'is_admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        Route::get('/dashboard', [AdminDashboardController::class, 'index'])
            ->name('dashboard');

        // nanti bisa ditambah:
        // Route::resource('/services', AdminServiceController::class);
        // Route::resource('/bookings', AdminBookingController::class);
    });

    Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/booking', fn() => view('booking'))->name('booking');

Route::middleware(['auth'])->group(function () {
    Route::get('/booking', function () {
        return view('booking');
    })->name('booking');

    Route::post('/booking/store', [BookingController::class, 'store'])
        ->name('booking.store');

        // INBOX
    Route::get('/inbox', [InboxController::class, 'index'])
        ->name('inbox');

    // PROFILE
    Route::get('/profile', [ProfileController::class, 'index'])
        ->name('profile');
});


Route::get('/profile/notification', function () {
    return view('profile.notification');
})->name('profile.notification');


