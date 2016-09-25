<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tickets extends Model
{
    public $fillable = ['moviename', 'location', 'time', 'childticket', 'adulticket', 'seniorticket', 'concessionticket'];
}
