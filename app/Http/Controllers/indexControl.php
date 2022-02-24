<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\movies;
use App\genero;

class indexControl extends Controller
{
    public function indexShow()
    {
        $movie = movies::all();
        $genero = genero::orderByRaw('rand()')->take(2)->get();
        return view('index', ['movie' => $movie, 'genders' => $genero]);
    }
    public function singleShow()
    {
        return view('movie.moviesingle');
    }
}
