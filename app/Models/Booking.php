<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'vehicle',
        'full_name',
        'phone_number',
        'queue_number',
        'booking_date',
        'status'
    ];
}