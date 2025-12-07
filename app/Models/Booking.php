<?php
namespace App\\Models;
use Illuminate\\Database\\Eloquent\\Model;
class Booking extends Model {protected $fillable=['user_id','service_id','date','start_time','status','vehicle_plate','notes'];}
