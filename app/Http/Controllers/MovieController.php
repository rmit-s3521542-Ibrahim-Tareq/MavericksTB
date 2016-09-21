<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use Illuminate\Http\Request;

use App\Http\Requests;

class MovieController extends Controller
{
    public function showDefault() {
        $movies = Movies::all(['movie_name', 'genre', 'poster_url', 'imdb_rating']);
        return view('movies', ['movies' => $movies]);
    }

}
