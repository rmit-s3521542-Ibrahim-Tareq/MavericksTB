<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bookings extends Model
{
    public $fillable = ['booking_id', 'user_id', 'name', 'address', 'city', 'postcode', 'mobilenum', 'cardnum', 'expirymonth', 'expiryear', 'securitynum'];
}
