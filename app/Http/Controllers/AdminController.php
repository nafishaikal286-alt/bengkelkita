public function dashboard()
{
    return view('admin.dashboard', [
        'totalUsers' => \App\Models\User::count(),
        'totalBookings' => \App\Models\Booking::count(),
        'totalServices' => \App\Models\Service::count(),
    ]);
}
