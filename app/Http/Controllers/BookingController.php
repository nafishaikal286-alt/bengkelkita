<?php
namespace App\\Http\\Controllers;
use App\\Models\\Booking;
use App\\Models\\Service;
use Illuminate\\Http\\Request;
class BookingController extends Controller {public function index(){return view('bookings.index',['bookings'=>Booking::all()]);}}
