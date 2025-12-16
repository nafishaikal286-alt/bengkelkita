<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Carbon\Carbon;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'vehicle' => 'required',
            'full_name' => 'required',
            'phone_number' => 'required',
        ]);

        // Hitung antrian hari ini
        $count = Booking::whereDate('booking_date', Carbon::today())->count();
        $queueNumber = 'A' . str_pad($count + 1, 3, '0', STR_PAD_LEFT);

        Booking::create([
            'vehicle' => $request->vehicle,
            'full_name' => $request->full_name,
            'phone_number' => $request->phone_number,
            'queue_number' => $queueNumber,
            'booking_date' => Carbon::today(),
            'status' => 'pending',
        ]);

        return redirect()->back()->with([
    'success' => true,
    'queue' => $queueNumber
]);
    }
}