use App\Models\Booking;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'vehicle' => 'required',
            'phone' => 'required'
        ]);

        // Generate nomor antrian otomatis
        $last = Booking::latest()->first();
        $number = $last ? intval(substr($last->queue_number, 1)) + 1 : 1;
        $queue = 'A' . str_pad($number, 3, '0', STR_PAD_LEFT);

        Booking::create([
            'user_id' => Auth::id(),
            'vehicle' => $request->vehicle,
            'phone' => $request->phone,
            'queue_number' => $queue
        ]);

        return redirect()->route('booking')
            ->with('success', 'Booking berhasil! Nomor Antrian: ' . $queue);
    }
}
