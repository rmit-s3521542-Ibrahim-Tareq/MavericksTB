<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tickets extends Model
{
    public $fillable = ['id', 'booking_id', 'session_time_id', 'movie_id', 'cinema_id', 'childticket', 'adulticket', 'seniorticket', 'concessionticket'];
}
