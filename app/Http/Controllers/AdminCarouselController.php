<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Redirect;

use App\Models\Carousel;
use App\Models\Movies;


use App\Http\Requests;

class AdminCarouselController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hot = Carousel::all(['id', 'movie_id', 'position'])->sortBy('position');
        $hotMovies = array();
        foreach($hot as $k=>$h) {
            $hotMovies[$k] = Movies::where('id', $h['movie_id'])->first();
        }

        return view('admin.carousel', ['hot' => $hot, 'hotMovies' => $hotMovies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $movies = Movies::all();
        return view('admin.carousel-add', ['movies' => $movies]);
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
            'position' => 'required',
            'movie_id' => 'required'
        ]);

        $check = Carousel::where('movie_id', '=', $request->input('movie_id'))->get();
        if(count($check) > 0) {
            return Redirect::back()->withErrors('This movie is already added to the carousel.');
        }

        Carousel::create($request->all());
        return redirect()->route('admin.carousel.index') ->with('success','Movie successfully added to list.');
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
        Carousel::where('id', '=', $id)->delete();
        return redirect()->route('admin.carousel.index') ->with('success','Movie successfully removed from list.');
    }
}
