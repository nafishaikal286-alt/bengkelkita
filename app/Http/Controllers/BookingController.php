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
            'vehicle'      => 'required',
            'full_name'    => 'required',
            'phone_number' => 'required',
        ]);

        $queueNumber = null;

        try {
            DB::transaction(function () use ($request, &$queueNumber) {

                $today = Carbon::today();

                // Ambil antrian terakhir hari ini
                $lastBooking = Booking::whereDate('booking_date', $today)
                    ->lockForUpdate()
                    ->orderBy('id', 'desc')
                    ->first();

                if ($lastBooking) {
                    $lastNumber = (int) substr($lastBooking->queue_number, 1);
                    $nextNumber = $lastNumber + 1;
                } else {
                    $nextNumber = 1;
                }

                $queueNumber = 'A' . str_pad($nextNumber, 3, '0', STR_PAD_LEFT);

                Booking::create([
                    'vehicle'      => $request->vehicle,
                    'full_name'    => $request->full_name,
                    'phone_number' => $request->phone_number,
                    'queue_number' => $queueNumber,
                    'booking_date' => $today,
                    'status'       => 'pending',
                ]);
            });

            return redirect()->back()->with([
                'success' => true,
                'queue'   => $queueNumber
            ]);

        } catch (\Exception $e) {
            return redirect()->back()->withErrors([
                'error' => 'Gagal membuat antrian: ' . $e->getMessage()
            ]);
        }
    }
}
