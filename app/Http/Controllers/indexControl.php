<?php

namespace App\Http\Controllers;

use App\calificacion_movie;
use App\genero;
use App\movies;
use App\actores;
use App\videos;

class indexControl extends Controller
{
    public function indexShow()
    {
        $movie = movies::all();
        $genero = genero::orderByRaw('rand()')->take(2)->get();
        $best = calificacion_movie::mejorCalificadas();
        $actores = actores::all();
        $videos = videos::orderByRaw('created_at DESC')->take(6)->get();
        $response = [
            'movie' => $movie,
            'genders' => $genero,
            'best' => $best,
            'actores' => $actores,
            'videos' => $videos
        ];
        return view('index', $response);
    }
    public function singleShow($id)
    {
        $movie = movies::find($id);
        if ($movie == null) {
            return redirect('/');
        }
        return view('movie.moviesingle', ['movie' => $movie]);
    }

    public function prueba()
    {
        $all = calificacion_movie::mejorCalificadas();
        foreach ($all as $a) {
            return $a->titulo;
        }
    }
}
