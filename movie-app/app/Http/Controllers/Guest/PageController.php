<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index(){
        $movies = Movie::all();
        //dd($movies);
        return view('home', compact('movies'));
    }

    public function archive(){
        return view('archive');
    }
    public function trending(){
        return view('trending');
    }

}
