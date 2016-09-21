<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use Illuminate\Http\Request;

use App\Http\Requests;

class MovieController extends Controller
{
    public function showDefault() {
        $movies = Movies::all(['id', 'poster_url']);
        return view('movies', ['movies' => $movies]);
    }

}
