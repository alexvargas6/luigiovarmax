<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\movies;
use Validator;

class uploadControl extends Controller
{
    public function uploadShow()
    {
        $movies = movies::all();
        return view('upload.upload', ['movies' => $movies]);
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
}
