<?php

namespace App\Http\Controllers;

use App\calificacion_movie;
use Illuminate\Support\Facades\Auth;
use App\genero;
use App\movies;
use App\actores;
use App\videos;
use App\like_movie;
use DB;

class indexControl extends Controller {

    public function devShow() {
        return view('dev.developers');
    }

    public function indexShow() {
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

    public function singleShow($id) {
        $movie = movies::find($id);
        $comentar = false;
        $existe = false;
        if ($movie == null) {
            return redirect('/');
        }
        if (Auth::check()) {
            $consulta = "SELECT * FROM like_movies WHERE idmovie =" . $movie->id . " AND idusuario =" . auth()->user()->id . ";";
            $resp = DB::select($consulta);

            if ($resp != null) {
                $existe = true;
            }

            $consulta = "SELECT * FROM calificacion_movies WHERE usuario =" . auth()->user()->id . " AND movie = " . $movie->id . ";";
            $comentario = DB::select($consulta);

            if ($comentario != null) {
                $comentar = true;
            }
        }
        return view('movie.moviesingle', ['movie' => $movie, 'existe' => $existe, 'comentario' => $comentar]);
    }

    public function prueba() {
        $all = movies::find(465);

        return $all->promedioCal($all->id);
    }

}
