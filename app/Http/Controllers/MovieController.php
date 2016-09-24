<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use Illuminate\Http\Request;
use App\Http\Requests;

class MovieController extends Controller
{
    public function showDefault() {
        return view('movies');
    }

    public function loadMovies(Request $r) {
        $movies = Movies::all(['id', 'poster_url', 'release_date', 'movie_name', 'sypnosis', 'actors', 'rating', 'runtime']);

        $soon = array();
        $current = array();

        foreach($movies as $k=>$m) {
            $d = (int) ($m['release_date']/1000);
            if($d < time()) {
                array_push($current, $m);
            }
            else {
                array_push($soon, $m);
            }
        }
        return json_encode(array($current, $soon));
    }
}
