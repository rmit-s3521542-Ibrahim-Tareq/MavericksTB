<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use App\Models\WhatsHot;
use App\Models\Carousel;
use App\Models\WishList;
use App\Models\SessionTimes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;

class AdminMovieController extends Controller
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
        $movies = Movies::all(['id', 'poster_url', 'movie_name', 'release_date']);

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
        return view('admin.movie', ['soon' => $soon, 'current' => $current]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.movie-add');
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
            'movie_name' => 'required',
            'release_date' => 'required',
            'genre' => 'required',
            'sypnosis' => 'required',
            'poster_url' => 'required',
            'rating' => 'required',
            'imdb_rating' => 'required|min:1|max:10',
            'runtime' => 'required'
        ]);

        Movies::create($request->all());
        return redirect()->route('admin.movies.index') ->with('success','Movie successfully added.');
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
        $movie = Movies::where('id', '=', $id)->first();
        if(count($movie) < 1) {
            return Redirect::to('/admin/movies');
        }

        return view('admin.movie-edit', ['movie' => $movie]);
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
        $this->validate($request, [
            'movie_name' => 'required',
            'release_date' => 'required',
            'genre' => 'required',
            'sypnosis' => 'required',
            'poster_url' => 'required',
            'rating' => 'required',
            'imdb_rating' => 'required',
            'runtime' => 'required'
        ]);

        Movies::find($id)->update($request->all());
        return redirect()->route('admin.movies.index') ->with('success','Movie successfully modified.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        WhatsHot::where('movie_id', '=', $id)->delete();
        Carousel::where('movie_id', '=', $id)->delete();
        WishList::where('movie_id', '=', $id)->delete();
        SessionTimes::where('movie_id', '=', $id)->delete();
        Movies::find($id)->delete();
        return redirect()->route('admin.movies.index') ->with('success','Movie successfully deleted.');
    }
}
