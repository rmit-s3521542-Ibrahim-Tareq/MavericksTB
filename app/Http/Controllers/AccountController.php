<?php

namespace App\Http\Controllers;

use App\Models\Bookings;
use App\Models\Cinemas;
use App\Models\SessionTimes;
use App\Models\TicketBookings;
use App\Models\Tickets;
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

    public function index() {

        $arr = array();
        $wishes = WishList::where('user_id', '=', Auth::id())->get(['id', 'movie_id']);
        foreach ($wishes as $s) {
            $movieDetails = Movies::where('id', '=', $s['movie_id'])->first(['id', 'movie_name', 'poster_url']);
            $movieDetails['wish_id'] = $s['id'];
            array_push($arr, $movieDetails);
        }

        $bookingArr = array();
        $bookings = Bookings::where('user_id', '=', Auth::id())->get(['booking_id', 'created_at']);
        foreach ($bookings as $book){
            $bookingTempArr = array();
            $bookingTempArr['created_at'] = $book['created_at'];
            $bookingTempArr['booking_id'] = $book['booking_id'];
            $bookingID = $book['booking_id'];
            $movieID = TicketBookings::where('booking_id','=', $bookingID)->get(['ticket_id']);
            $movieDetails= array();
            foreach ($movieID as $movie) {
                $appender = array();
                $m = Tickets::where('id', '=', $movie['ticket_id'])->first(['movie_id', 'session_time_id', 'cinema_id', 'childticket', 'adulticket', 'seniorticket', 'concessionticket']);
                $movie_name = Movies::where('id', '=', $m['movie_id'])->first(['movie_name']);
                $movie_location = Cinemas::where('id', '=', $m['cinema_id'])->first(['cinema_name']);
                $movie_session = SessionTimes::where('id', '=', $m['session_time_id'])->first(['session_time']);

                $appender['ticket'] = $m;
                $appender['movie'] = $movie_name;
                $appender['location'] = $movie_location;
                $appender['session'] = $movie_session;

                array_push($movieDetails, $appender);
            }
            $bookingTempArr['movie_details'] = $movieDetails;
            array_push($bookingArr, $bookingTempArr);
        }

        $i = 0;
        return view('account', ['wishlist' => $arr, 'bookingArray' => $bookingArr, 'i' => $i]);
    }


    public function destroy($id)
    {
        WishList::where('id', '=', $id)->delete();

        return redirect()->route('account.index') ->with('success','Movie successfully deleted.');
    }

}
