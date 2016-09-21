<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //
    
    
    public function tickets(){
        return $this->hasMany('\App\Tickets');
    }

    public function session(){
        return $this->hasOne('\App\SessionTimes');
    }
}
