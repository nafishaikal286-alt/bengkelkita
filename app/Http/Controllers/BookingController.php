<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'vehicle' => 'required',
            'full_name' => 'required',
            'phone_number' => 'required',
        ]);

        // Inisialisasi variabel di luar closure agar bisa diakses saat return
        $queueNumber = null;

        try {
            DB::transaction(function () use ($request, &$queueNumber) {
                $today = Carbon::today()->format('Y-m-d');

                // 1. Ambil antrian terakhir KHUSUS hari ini
                // Pastikan kolom 'booking_date' di DB bertipe date/datetime
                $lastBooking = Booking::whereDate('booking_date', $today)
                    ->lockForUpdate() // Mengunci baris agar tidak ada double input di detik yang sama
                    ->orderBy('id', 'desc') // Menggunakan ID lebih aman untuk urutan terakhir
                    ->first();

                // 2. Logika Reset Otomatis
                if ($lastBooking) {
                    // Jika ada antrian hari ini, ambil nomornya dan tambah 1
                    $lastNumber = (int) substr($lastBooking->queue_number, 1);
                    $nextNumber = $lastNumber + 1;
                } else {
                    // Jika tidak ada antrian hari ini, reset ke 1
                    $nextNumber = 1;
                }

                // Format menjadi A001, A002, dst
                $queueNumber = 'A' . str_pad($nextNumber, 3, '0', STR_PAD_LEFT);

                // 3. Simpan data booking
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
                'success' => 'Booking berhasil!',
                'queue'   => $queueNumber
            ]);

        } catch (\Exception $e) {
            // Jika terjadi error (misal duplikasi yang tak terduga), kembalikan pesan error
            return redirect()->back()->withErrors(['error' => 'Gagal membuat antrian: ' . $e->getMessage()]);
        }
    }
}