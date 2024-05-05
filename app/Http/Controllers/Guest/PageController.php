<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index(){
        $movies = Movie::all();
        //filtro il mio database!  
        //$movies = Movie::where('title', 'Gravity')->get()   2 param 
        //$movies = Movie::where('vote', '>', 8 )->get()      3 param
        //dd($movies);
        //potrei anche utilizzare un orderby() e limit()
        return view('home', compact('movies'));
    }

    public function archive(){
        return view('archive');
    }
    public function trending(){
        
        return view('trending');
    }

}
