<?php

namespace App\Http\Controllers;

use App\Models\WhatsHot;
use App\Models\Movies;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $hot = WhatsHot::all(['movie_id', 'position'])->sortBy('position');

        $movies = array();
        foreach($hot as $k=>$h) {
            $movies[$k] = Movies::where('id', $h['movie_id'])->first();
        }
        $i = 0;
        return view('home', ['hot' => $hot, 'i' => $i, 'movies' => $movies]);
    }
}
