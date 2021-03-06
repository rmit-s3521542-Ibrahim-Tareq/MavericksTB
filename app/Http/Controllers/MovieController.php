<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use App\Models\Cinemas;
use App\Models\SessionTimes;
use App\Models\WishList;
use App\Models\User;
use Auth;
use Request;
use Input;
use DB;

class MovieController extends Controller
{
    public function showDefault() {
        return view('movies');
    }

    public function loadMovies(Request $r) {
        $movies = Movies::all(['id', 'poster_url', 'release_date', 'youtube_url', 'imdb_rating', 'rating', 'actors', 'movie_name', 'sypnosis', 'actors', 'rating', 'runtime', 'genre']);
        $cinemas = Cinemas::all(['id', 'cinema_name', 'location']);
        $sessions = SessionTimes::all(['id', 'session_time', 'movie_id', 'cinema_id']);

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
        return json_encode(array($current, $soon, $cinemas, $sessions));
    }

    public function addWishlist(Request $r) {
        if(Auth::guest()) {
            return json_encode("error");
        }

        $movieid = Input::get('id');
        $movies = Movies::where('id', '=', $movieid)->first();
        if(count($movies) < 1) {
            return json_encode("error");
        }

        $wishlist = WishList::where([
            ['movie_id', '=', $movieid],
            ['user_id', '=', Auth::id()]
        ])->first();

        if(count($wishlist) > 0) {
            return json_encode("error");
        }

        DB::table('wish_lists')->insert([
            'movie_id' => $movieid,
            'user_id' => Auth::id()
        ]);
        return json_encode("success");
    }
}
