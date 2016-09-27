<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class SearchController extends Controller
{
    public function process() {
        $term = Input::get('term');
        return Redirect::to('search/'.$term) ;
    }

    public function search($term) {
        return view('search', ['term' => $term]);
    }
}
