<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\calificacion_movie;
use App\like_movie;
use DB;
use Validator;

class likeControl extends Controller {

    public function puntuarStore(Request $request) {
        $rules = [
            'usuario' => 'required',
            'movie' => 'required',
            'calificacion' => 'required|numeric',
            'comentario' => 'required'
        ];

        $messages = [
            'usuario.required' => 'SE REQUIERE EL ID DEL USUARIO',
            'movie.required' => 'SE REQUIERE EL ID DE LA PELICULA',
            'calificacion.required' => 'SE REQUIERE LA CALIFICACIÓN',
            'calificacion.numeric' => 'LA CALIFICACIÓN DEBE SER NÚMERICA'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return redirect()->back()->with('ERROR', $errors);
        }

        $consulta = "SELECT * FROM calificacion_movies WHERE usuario =" . $request->usuario . " AND movie = " . $request->movie . ";";

        $resp = DB::select($consulta);

        if ($resp == null) {
            try {
                $cm = new calificacion_movie();
                $cm->usuario = $request->usuario;
                $cm->movie = $request->movie;
                $cm->comentario = $request->comentario;
                $cm->calificacion = $request->calificacion;
                $cm->save();
                return redirect()->back()->with('success', 'SE AGREGO DE MANERA CORRECTA');
            } catch (\Exception $e) {
                //dd($e);
                return redirect()->back()->with('ERROR', $e);
            }
        } else {
            return redirect()->back()->with('ERROR', "Ya existe esa relación");
        }
    }

    public function likear($idUs = "", $idMov = "") {

        $consulta = "SELECT * FROM like_movies WHERE idmovie =" . $idMov . " AND idusuario =" . $idUs . ";";
        $resp = DB::select($consulta);

        if ($resp == null) {

            try {
                $like = new like_movie();
                $like->idmovie = $idMov;
                $like->idusuario = $idUs;
                $like->save();
                return redirect()->back()->with('success', 'SE AGREGO DE MANERA CORRECTA');
            } catch (\Exception $e) {
                return redirect()->back()->with('ERROR', $e);
            }
        } else {
            return redirect()->back()->with('ERROR', "Ya existe esa relación");
        }
    }

}
