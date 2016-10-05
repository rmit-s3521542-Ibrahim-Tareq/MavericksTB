<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Http\Requests;
use App\Models\Bookings;
use App\Models\Tickets;
use App\Models\TicketBookings;
use phpDocumentor\Reflection\Types\Resource;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $total = $request->input('total');
        return view('payment', compact('total'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'postcode' => 'required',
            'cardnum' => 'required',
            'mobilenum' => 'required',
            'expirymonth' => 'required',
            'expiryear' => 'required',
            'securitynum' => 'required',
        ]);

        $userid = 0;
        if(!Auth::guest()) {
            $userid = Auth::id();
        }

        $booking = Bookings::create(
            array(
                'user_id' => $userid,
                'name' => $request->get('name'),
                'address' => $request->get('address'),
                'city' => $request->get('city'),
                'postcode' => $request->get('postcode'),
                'mobilenum' => $request->get('mobilenum'),
                'cardnum' => $request->get('cardnum'),
                'expirymonth' => $request->get('expirymonth'),
                'expiryear' => $request->get('expiryear'),
                'securitynum' => $request->get('securitynum')
            )
        );

        $alltickets = session()->get('tickets');
        foreach ($alltickets as $ticket) {

            if ($ticket['adult'] == "")
            {
                $ticket['adult'] = 0;
            }
            if ($ticket['child'] == "")
            {
                $ticket['child'] = 0;
            }
            if ($ticket['senior'] == "")
            {
                $ticket['senior'] = 0;
            }
            if ($ticket['concession'] == "")
            {
                $ticket['concession'] = 0;
            }

            $ticket = Tickets::create(
                array(
                    'booking_id' => $booking->id,
                    'session_time_id' => $ticket['time'],
                    'movie_id' => $ticket['movie_id'],
                    'cinema_id' => $ticket['location'],
                    'childticket' => $ticket['child'],
                    'adulticket' => $ticket['adult'],
                    'seniorticket' => $ticket['senior'],
                    'concessionticket' => $ticket['concession']
                )
            );

            TicketBookings::create(
                array(
                    'booking_id' => $booking->id,
                    'ticket_id' => $ticket->id
                )
            );
        }
        session()->forget('tickets');

        return view('success', compact('request'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
