<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\like_movie;
use DB;
use Validator;

class likeControl extends Controller
{
    public function likear(Request $request)
    {
        $rules = [
            'movie' => 'required',
            'usuario' => 'required',
        ];

        $messages = [
            'movie.required' => 'SE REQUIERE EL ID DE LA PELICULA',
            'usuario.required' => 'SE REQUIERE EL ID DEL USUARIO'

        ];
    }
}
