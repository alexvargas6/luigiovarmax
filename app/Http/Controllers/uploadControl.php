<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\actores_movie;
use App\movies;
use App\actores;
use App\director;
use App\director_movie;
use App\genero_movie;
use DB;
use Validator;
use App\genero;

class uploadControl extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function categoriaShow()
    {
        $genero = genero::all();
        return view('administrador.categoriasControl', ['genero' => $genero]);
    }

    public function categoriaStore(Request $request)
    {
        $rules = [
            'nombre' => 'required|max:255'
        ];

        $messages = [
            'nombre.required' => 'SE REQUIERE EL NOMBRE',
            'nombre.max' => 'EL NOMBRE ES MUY LARGO'
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return redirect()->back()->with('ERROR', $errors);
        }

        try {
            $genero = new genero();
            $genero->nombre = $request->nombre;
            $genero->save();
        } catch (\Exception $e) {
            return redirect()->back()->with('ERROR', $e);
        }
        return redirect()->back()->with('success', 'SE AGREGO DE MANERA CORRECTA');
    }

    public function storeDir(Request $request)
    {
        $rules = [
            'nombre' => 'required|max:255',
            'fecha' => 'required',
            'nacionalidad' => 'required|max:255'
        ];
        $messages = [
            'fecha.required' => 'SE REQUIERE LA FECHA',
            'nombre.required' => 'SE REQUIERE EL NOMBRE',
            'nombre.max' => 'EL NOMBRE ES MUY LARGO',
            'nacionalidad.required' => 'SE REQUIERE LA NACIONALIDAD',
            'nacionalidad.max' => 'EL TEXTO ES MUY LARGO'
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return redirect()->back()->with('ERROR', $errors);
        }
        try {
            $director = new director();
            $director->nombre = $request->nombre;
            $director->fecha = $request->fecha;
            $director->nacionalidad = $request->nacionalidad;
            $director->save();
        } catch (\Exception $e) {
            return redirect()->back()->with('ERROR', $e);
        }
        return redirect()->back()->with('success', 'SE AGREGO DE MANERA CORRECTA');
    }

    public function uploadShow()
    {
        $actor = actores::all();
        $movies = movies::all();
        return view('upload.upload', ['movies' => $movies, 'actor' => $actor]);
    }

    public function actorShow()
    {
        $actor = actores::all();
        return view('administrador.actor', ['actor' => $actor]);
    }

    public function actMovShow()
    {
        $actor = actores::all();
        $actMov = actores_movie::all();
        $movies = movies::all();
        return view('administrador.relacionarActorPelicula', ['acmov' => $actMov, 'actor' => $actor, 'movies' => $movies]);
    }

    public function dirShow()
    {
        $dir = director::all();
        return view('administrador.director', ['dir' => $dir]);
    }

    public function catMovStore(Request $request)
    { 
        $idmov = "";
        $idgen = "";

        $rules = [
            'genero' => 'required',
            'movie' => 'required'
        ];

        $messages = [
            'genero.required' => 'SE REQUIERE EL ID',
            'movie.required' => 'SE REQUIERE EL ID'
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return redirect()->back()->with('ERROR', $errors);
        }

        $idmov = $request->movie;
        $idgen = $request->genero;

        $consulta = "SELECT * FROM genero_movies WHERE idmovie =" . $idmov . " AND idgenero = " . $idgen . ";";

        $resp = DB::select($consulta);
        if ($resp == null) {

            try {
                $dm = new genero_movie();
                $dm->idmovie = $idmov;
                $dm->idgenero = $idgen;
                $dm->save();
                return redirect()->back()->with('success', 'SE AGREGO DE MANERA CORRECTA');
            } catch (\Exception $e) {
                return redirect()->back()->with('ERROR', $e);
            }
        } else {
            return redirect()->back()->with('ERROR', "Ya existe esa relación");
        }
    }

    public function dirMoviStr(Request $request)
    {
        $idmov = "";
        $iddir = "";
        $rules = [
            'director' => 'required',
            'movie' => 'required'
        ];
        $messages = [
            'director.required' => 'SE REQUIERE EL ID',
            'movie.required' => 'SE REQUIERE EL ID'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return redirect()->back()->with('ERROR', $errors);
        }
        $idmov = $request->movie;
        $iddir = $request->director;

        $consulta = "SELECT * FROM director_movies WHERE idmovie =" . $idmov . " AND iddirector =" . $iddir . ";";

        $resp = DB::select($consulta);

        if ($resp == null) {
            try {
                $dirMov = new director_movie();
                $dirMov->idmovie = $idmov;
                $dirMov->iddirector = $iddir;
                $dirMov->save();
                return redirect()->back()->with('success', 'SE AGREGO DE MANERA CORRECTA');
            } catch (\Exception $e) {
                return redirect()->back()->with('ERROR', $e);
            }
        } else {
            return redirect()->back()->with('ERROR', "Ya existe esa relación");
        }
    }

    public function actorMovStore(Request $request)
    {
        $idmov = "";
        $idact = "";
        $rules = [
            'actor' => 'required',
            'movie' => 'required'
        ];
        $messages = [
            'actor.required' => 'SE REQUIERE EL ID',
            'movie.required' => 'SE REQUIERE EL ID'
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return redirect()->back()->with('ERROR', $errors);
        }
        $idmov = $request->movie;
        $idact = $request->actor;

        $consulta = "SELECT * FROM actores_movies WHERE idmovie =" . $idmov . " AND idactor =" . $idact . ";";

        $resp = DB::select($consulta);

        if ($resp == null) {
            try {
                $am = new actores_movie();
                $am->idmovie = $idmov;
                $am->idactor = $idact;
                $am->save();
                return redirect()->back()->with('success', 'SE AGREGO DE MANERA CORRECTA');
            } catch (\Exception $e) {
                return redirect()->back()->with('ERROR', $e);
            }
        } else {
            return redirect()->back()->with('ERROR', "Ya existe esa relación");
        }
    }

    public function storeActor(Request $request)
    {
        $rules = [
            'nombre' => 'required|max:255',
            'foto' => 'required|max:255',
            'nacionalidad' => 'max:255'
        ];
        $messages = [
            'foto.required' => 'SE REQUIERE LA URL',
            'foto.max' => 'LA URL ES MUY LARGA',
            'nombre.required' => 'SE REQUIERE EL NOMBRE',
            'nombre.max' => 'EL NOMBRE ES MUY LARGO',
            'nacionalidad.required' => 'SE REQUIERE LA NACIONALIDAD',
            'nacionalidad.max' => 'EL TEXTO ES MUY LARGO'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return redirect()->back()->with('ERROR', $errors);
        }
        try {
            $actor = new actores();
            $actor->nombre = $request->nombre;
            $actor->fecha = $request->fecha;
            $actor->nacionalidad = $request->nacionalidad;
            $actor->foto = $request->foto;
            $actor->save();
        } catch (\Exception $e) {
            return redirect()->back()->with('ERROR', $e);
        }
        return redirect()->back()->with('success', 'SE AGREGO DE MANERA CORRECTA');
    }

    public function storeMovie(Request $request)
    {
        $rules = [
            'titulo' => 'required|max:255',
            'url' => 'required|max:255',
            'portada' => 'max:255'
        ];

        $messages = [
            'url.required' => 'SE REQUIERE LA URL',
            'url.max' => 'LA URL ES MUY LARGA',
            'titulo.required' => 'SE REQUIERE EL TITULO',
            'portada.max' => 'EL LINK DE LA PORTADA ES MUY LARGO'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return redirect()->back()->with('ERROR', $errors);
        }

        try {
            $mov = new movies();
            $mov->titulo = $request->titulo;
            $mov->portada = $request->portada;
            $mov->duracion = $request->duracion;
            $mov->descripcion = $request->descripcion;
            $mov->url = $request->url;
            $mov->pais = $request->pais;
            $mov->total_visitas = 0;
            $mov->upload = 1;
            $mov->trailer = $request->trailer;
            $mov->save();
        } catch (\Exception $e) {
            return redirect()->back()->with('ERROR', $e);
        }
        return redirect()->back()->with('success', 'SE AGREGO LA PELICULA DE MANERA CORRECTA');
    }

    public function showDirMovie()
    {
        $director = director::all();
        $movies = movies::all();
        $dirMov = director_movie::all();
        return view('administrador.relacionarDirectorPelicula', ['dirMov' => $dirMov, 'movies' => $movies, 'director' => $director]);
    }
}
