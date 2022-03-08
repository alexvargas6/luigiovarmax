<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\movies;

class busqControl extends Controller
{

    public function moreRecent()
    {
        $movies = movies::orderByRaw('updated_at - created_at DESC')->get();
        return view('movie.listMovie', ["movies" => $movies, 'titulo' => "LO MÁS"]);
    }

    public function listaShow($parametroBusqueda)
    {
        $movies = $this->videos($parametroBusqueda);
        return view('movie.listMovie', ["movies" => $movies, 'titulo' => $parametroBusqueda]);
    }

    public function videos($parametroBusqueda)
    {
        $videos = DB::table('movies')
            ->join('genero_movies', 'movies.id', '=', 'genero_movies.idmovie')
            ->join('generos', 'generos.id', '=', 'genero_movies.idgenero')
            ->join('actores_movies', 'movies.id', '=', 'actores_movies.idmovie')
            ->join('actores', 'actores_movies.idactor', '=', 'actores.id')
            ->Where('movies.titulo', 'like', "%" . $parametroBusqueda . "%")
            ->orWhere('movies.descripcion', 'like', "%" . $parametroBusqueda . "%")
            ->orWhere('generos.nombre', 'like', "%" . $parametroBusqueda . "%")
            ->orWhere('actores.nombre', 'like', "%" . $parametroBusqueda . "%")
            ->select('movies.*')
            ->get();
        return $videos;
    }

    public function buscar(Request $request)
    {
        $movies = $this->videos($request->parametro);
        return view('movie.listMovie', ["movies" => $movies, 'titulo' => $request->parametro]);
    }

    public function prueba($parametroBusqueda)
    {
        $movies = movies::orderByRaw('updated_at - created_at DESC')->get();
        return $movies;
    }
}
