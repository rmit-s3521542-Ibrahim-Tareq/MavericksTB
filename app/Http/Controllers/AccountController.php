<?php

namespace App\Http\Controllers;

use App\Models\Bookings;
use App\Models\SessionTimes;
use App\Models\WishList;
use App\Models\Movies;
use Illuminate\Http\Request;

use Auth;
use App\Http\Requests;

class AccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show() {

        $arr = array();
        $wishes = WishList::where('user_id', '=', Auth::id())->get(['movie_id']);
        foreach ($wishes as $s) {
            $movieDetails = Movies::where('id', '=', $s['movie_id'])->first(['id', 'movie_name', 'poster_url']);
            array_push($arr, $movieDetails);
        }

        $bookingArr = array();
        $bookings = Bookings::where('user_id', '=', Auth::id())->get(['session_time_id', 'created_at']);
        foreach ($bookings as $book){
            $bookingTempArr = array();
            $bookingTempArr['created_at'] = $book['created_at'];
            $sessionID = $book['session_time_id'];
            $movieID = SessionTimes::where('id','=', $sessionID)->first(['movie_id', 'session_time']);

            $bookingTempArr['session_time'] = $movieID['session_time'];
                $movieDetails = Movies::where('id', '=', $movieID['movie_id'])->first(['id', 'movie_name', 'short_desc']);
            $bookingTempArr['movie_details'] = $movieDetails;
                array_push($bookingArr, $bookingTempArr);
        }
        return view('account', ['wishlist' => $arr, 'bookingArray' => $bookingArr]);
    }
}
