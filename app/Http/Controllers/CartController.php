<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Tickets;

class CartController extends Controller
{

    public function show() {
        return view('cart');
    }

    public function getTotalChildrenTickets() {

        $totalChildTix = Tickets::where('childticket', '>', 0)->get();
        $numOfChildTix = 0;
        foreach ($totalChildTix as $tix)
        {
            $numOfChildTix = $numOfChildTix + $tix->childticket;
        }
        return $numOfChildTix;
    }

    public function getTotalAdultTickets() {

        $totalAdultTix = Tickets::where('adulticket', '>', 0)->get();
        $numOfAdultTix = 0;
        foreach ($totalAdultTix as $tix)
        {
            $numOfAdultTix = $numOfAdultTix + $tix->adulticket;
        }
        return $numOfAdultTix;
    }

    public function getTotalSeniorTickets() {

        $totalSeniorTix = Tickets::where('seniorticket', '>', 0)->get();
        $numOfSeniorTix = 0;
        foreach ($totalSeniorTix as $tix)
        {
            $numOfSeniorTix = $numOfSeniorTix + $tix->seniorticket;
        }
        return $numOfSeniorTix;
    }

    public function getTotalConcessionTickets() {

        $totalConcessionTix = Tickets::where('concessionticket', '>', 0)->get();
        $numOfConcessionTix = 0;
        foreach ($totalConcessionTix as $tix)
        {
            $numOfConcessionTix = $numOfConcessionTix + $tix->concessionticket;
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
        $tickets = Tickets::all();
        $numOfChildTix = $this->getTotalChildrenTickets();
        $numOfAdultTix = $this->getTotalAdultTickets();
        $numOfSeniorTix = $this->getTotalSeniorTickets();
        $numOfConcessionTix = $this->getTotalConcessionTickets();
        $grandTotal = $this->grandTotal($numOfChildTix, $numOfAdultTix, $numOfSeniorTix, $numOfConcessionTix);

        return view('cart', compact('tickets', 'numOfChildTix', 'numOfAdultTix', 'numOfSeniorTix', 'numOfConcessionTix', 'grandTotal'));
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
           'moviename' => 'required',
           'location' => 'required',
           'time' => 'required',
        ]);

        Tickets::create($request->all());
        return redirect()->action('CartController@index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prod = Tickets::find($id);
        return view('cart',compact('prod'));
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
        Tickets::find($id)->update($request->all());
        return redirect()->action('CartController@index')->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tickets::find($id)->delete();
        return redirect()->action('CartController@index')->with('success','Product deleted successfully');
    }
}
