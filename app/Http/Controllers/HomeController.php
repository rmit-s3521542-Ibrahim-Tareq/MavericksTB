<?php

namespace App\Http\Controllers;

use App\Models\WhatsHot;
use App\Models\Movies;
use App\Models\Carousel;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $carousel = Carousel::all(['movie_id', 'position'])->sortBy('position');
        $movies = array();
        foreach($carousel as $k=>$h) {
            $movies[$k] = Movies::where('id', $h['movie_id'])->first();
        }
        $i = 0;

        $hot = WhatsHot::all(['movie_id', 'position'])->sortBy('position');
        $hotMovies = array();
        foreach($hot as $k=>$h) {
            $hotMovies[$k] = Movies::where('id', $h['movie_id'])->first();
        }

        return view('home', ['carousel' => $carousel, 'i' => $i, 'movies' => $movies, 'hot' => $hot, 'hotMovies' => $hotMovies]);
    }
}
