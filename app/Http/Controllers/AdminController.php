<?php
namespace App\\Http\\Controllers;
use App\\Models\\Service;
use App\\Models\\Booking;
use App\\Models\\User;
class AdminController extends Controller {public function dashboard(){return view('admin.dashboard',['totalUsers'=>User::count(),'totalBookings'=>Booking::count(),'totalServices'=>Service::count()]);}}
