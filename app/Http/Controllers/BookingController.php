<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Booking;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'vehicle' => 'required',
            'full_name' => 'required',
            'phone_number' => 'required',
        ]);

        DB::transaction(function () use ($request, &$queueNumber) {

            $lastQueue = Booking::whereDate('booking_date', Carbon::today())
                ->lockForUpdate()
                ->max('queue_number');

            if ($lastQueue) {
                $number = (int) substr($lastQueue, 1);
                $nextNumber = $number + 1;
            } else {
                $nextNumber = 1;
            }

            $queueNumber = 'A' . str_pad($nextNumber, 3, '0', STR_PAD_LEFT);

            Booking::create([
                'vehicle' => $request->vehicle,
                'full_name' => $request->full_name,
                'phone_number' => $request->phone_number,
                'queue_number' => $queueNumber,
                'booking_date' => Carbon::today(),
                'status' => 'pending',
            ]);
        });

        return redirect()->back()->with([
            'success' => true,
            'queue' => $queueNumber
        ]);
    }
}
