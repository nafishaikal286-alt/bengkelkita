class Booking extends Model
{
    protected $fillable = [
        'user_id',
        'vehicle',
        'phone',
        'queue_number'
    ];
}
