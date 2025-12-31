<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/home', [AuthController::class, 'home'])
    ->middleware('auth')
    ->name('home');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

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

Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/register/profil', function () {
    return view('auth.register-profil');
})->name('register.profil');

Route::post('/register', [AuthController::class, 'register'])->name('register');


// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::post('/booking/store', [BookingController::class, 'store'])->name('booking.store');

Route::middleware(['auth'])->group(function () {

    Route::get('/booking', function () {
    return view('booking');
    })->name('booking');




Route::get('/profile', [ProfileController::class, 'index']);


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

      Route::get('/inbox', function () {
    return view('inbox');
})->name('inbox');


    // PROFILE
    
    Route::get('/profile', [ProfileController::class, 'index'])
        ->name('profile');
});


Route::get('/profile/notification', function () {
    return view('profile.notification');
})->name('profile.notification');


