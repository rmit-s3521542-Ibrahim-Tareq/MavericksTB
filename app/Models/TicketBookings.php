<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicketBookings extends Model
{
    public $fillable = ['booking_id', 'ticket_id'];
}
