<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexControl extends Controller
{
    public function indexShow()
    {
        return view('index');
    }
    public function singleShow()
    {
        return view('movie.moviesingle');
    }
}
