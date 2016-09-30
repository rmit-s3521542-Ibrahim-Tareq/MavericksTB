<?php

namespace App\Http\Controllers;

use App\Models\SessionTimes;
use App\Models\Cinemas;
use App\Models\Movies;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class SearchController extends Controller
{
    public function process() {
        $term = Input::get('term');
        $arr = array();
        $cinemaID = Cinemas::where('cinema_name', '=', $term)->first(['id']);
        if(count($cinemaID)>0) {
            $sessionID = SessionTimes::where('cinema_id', '=', $cinemaID['id'])->get(['movie_id']);
            $sessionID= $sessionID->unique('movie_id');
            foreach ($sessionID as $s) {
                $movieDetails = Movies::where('id', '=', $s['movie_id'])->first(['id', 'movie_name', 'poster_url']);
                array_push($arr, $movieDetails);
            }
        }
        else{
            $arr = Movies::where('movie_name', '=', $term)->get(['id', 'movie_name', 'poster_url']);
        }
        return view('search', ['term' => $term, 'movies' => $arr]);
    }
}
