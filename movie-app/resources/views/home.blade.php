@extends('layouts.app')

@section('pageTitle', 'Home')

    @section('content') 
        

       <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-3">
            @foreach($movies as $movie)
             <div class="col">
             <div class="card h-100 shadow">
                <img src="https://picsum.photos/200/200" class="card-img-top">
                <div class="card-body">
                {{$movie->title}}
                </div>
             </div>
             </div>
            @endforeach
        </div>
       </div>


       
    @endsection
        
