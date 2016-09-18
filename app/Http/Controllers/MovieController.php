<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MovieController extends Controller
{
    public function showDefault() {
        return view('movies');
    }

}
