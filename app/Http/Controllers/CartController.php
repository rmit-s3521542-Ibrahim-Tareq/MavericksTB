<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

use App\Http\Requests;
use App\Models\Tickets;
use App\Models\Movies;

class CartController extends Controller
{

    public function show() {
        return view('cart');
    }

    public function getTotalChildrenTickets() {

        $allTickets = session()->get('tickets');
        $numOfChildTix = 0;

        foreach ($allTickets as $ticket)
        {
            $numOfChildTix = $ticket['child'] + $numOfChildTix;
        }

        return $numOfChildTix;
    }

    public function getTotalAdultTickets() {

        $allTickets = session()->get('tickets');
        $numOfAdultTix = 0;

        foreach ($allTickets as $ticket)
        {
            $numOfAdultTix = $ticket['adult'] + $numOfAdultTix;
        }

        return $numOfAdultTix;
    }

    public function getTotalSeniorTickets() {

        $allTickets = session()->get('tickets');
        $numOfSeniorTix = 0;

        foreach ($allTickets as $ticket)
        {
            $numOfSeniorTix = $ticket['senior'] + $numOfSeniorTix;
        }

        return $numOfSeniorTix;
    }

    public function getTotalConcessionTickets() {

        $allTickets = session()->get('tickets');
        $numOfConcessionTix = 0;

        foreach ($allTickets as $ticket)
        {
            $numOfConcessionTix = $ticket['concession'] + $numOfConcessionTix;
        }

        return $numOfConcessionTix;
    }

    public function grandTotal($child, $adult, $senior, $concession)
    {
        $childTotal = $child * 8;
        $adultTotal = $adult * 14;
        $seniorTotal = $senior * 12;
        $concessionTotal = $concession * 10;

        $grandtotal = $childTotal + $adultTotal + $seniorTotal + $concessionTotal;
        return $grandtotal;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appendArr = array();

        if (session()->has('tickets')) {
            $numOfChildTix = $this->getTotalChildrenTickets();
            $numOfAdultTix = $this->getTotalAdultTickets();
            $numOfSeniorTix = $this->getTotalSeniorTickets();
            $numOfConcessionTix = $this->getTotalConcessionTickets();
            $grandTotal = $this->grandTotal($numOfChildTix, $numOfAdultTix, $numOfSeniorTix, $numOfConcessionTix);

            $s = session()->get('tickets');
            foreach($s as $ticket) {
                $appender = array();
                $appender['session'] = $ticket;

                $movie = Movies::where('id', '=', $ticket['movie_id'])->first();
                $cinema = Cinemas::where('id', '=', $ticket['location']);
                $appender['movie'] = $movie;
                $appender['cinema'] = $cinema;

                array_push($appendArr, $appender);
            }
        }
        else {
            $numOfChildTix = 0;
            $numOfAdultTix = 0;
            $numOfSeniorTix = 0;
            $numOfConcessionTix = 0;
            $grandTotal = 0;
        }

        return view('cart', compact('numOfChildTix', 'numOfAdultTix', 'numOfSeniorTix', 'numOfConcessionTix', 'grandTotal', 'appendArr'));
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
        //session()->flush();

        $this->validate($request, [
            'location' => 'required',
            'time' => 'required',
        ]);

        $ticket = array();

        $movieid = $request->movieid;
        $location = $request->location;
        $time = $request->time;
        $child = $request->childticket;
        $adult = $request->adulticket;
        $senior = $request->seniorticket;
        $concession = $request->concessionticket;


        $ticket['id'] = rand(1, 10000);
        $ticket['movie_id'] = $movieid;
        $ticket['location'] = $location;
        $ticket['time'] = $time;
        $ticket['child'] = $child;
        $ticket['adult'] = $adult;
        $ticket['senior'] = $senior;
        $ticket['concession'] = $concession;

        session()->push('tickets',  $ticket);

        return redirect()->route('cart.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        foreach(Session::get('tickets') as $ticket) {
            if ($ticket['id'] == $id) {
                return view('edit', compact('ticket'));
            }
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $updatedChild = $request->childticket;
        $updatedAdult = $request->adulticket;
        $updatedSenior = $request->seniorticket;
        $updatedConcession = $request->concessionticket;
        $ticketID = $request->ticketID;

        $tickets = session()->get('tickets');

        foreach ($tickets as $key=>$ticket)
        {
            if ($ticket['id'] == $ticketID)
            {
                $tickets[$key]['child'] = $updatedChild;
                $tickets[$key]['adult'] = $updatedAdult;
                $tickets[$key]['senior'] = $updatedSenior;
                $tickets[$key]['concession'] = $updatedConcession;
                break;
            }
        }

        session()->set('tickets', $tickets);
        session()->save();

        return redirect()->action('CartController@index') ->with('success','Ticket updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tickets = session()->get('tickets');


        foreach ($tickets as $key=>$ticket)
        {
            if ($ticket['id'] == $id)
            {
                session()->forget('tickets.'.$key);
                session()->save();
                break;
            }
        }

        return redirect()->action('CartController@index') ->with('successDel','Ticket deleted successfully');
    }
}
