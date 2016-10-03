<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Models\Bookings;
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

            DB::table('tickets')->insert(
                array('moviename' => $ticket['name'], 'location' => $ticket['location'], 'time' => $ticket['time'],
                    'childticket' => $ticket['child'], 'adulticket' => $ticket['adult'],
                    'seniorticket' => $ticket['senior'], 'concessionticket' => $ticket['concession'])
            );
        }

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
        if (session()->has('count')) {
            $bookingID = session()->get('count');
        }
        else
        {
            $bookingID = 0;
            session()->put('count', 0);
        }

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

        $ticketoo = session()->get('tickets');

        foreach ($ticketoo as $ticket)
        {
            TicketBookings::create(
                ['ticket_id' => $ticket['id'],
                    'booking_id' => $bookingID]
            );
        }

        $request->merge(
            ['booking_id' => $bookingID]
        );
        Bookings::create($request->all());

        $bookingID++;
        session()->put('count', $bookingID);

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
