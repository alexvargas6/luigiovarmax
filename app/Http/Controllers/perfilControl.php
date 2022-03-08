<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use DB;

class perfilControl extends Controller
{
    public function perfilShow($id)
    {
        $usuario = user::find($id);
        if (is_null($usuario)) {

            return redirect('/');
        }
        return view('profile.change', ['usuario' => $usuario]);
    }

    public function favoritProfile()
    {
        return view('profile.userFavorite');
    }

    public function singleProfile($id)
    {
        $usuario = user::find($id);
        if (is_null($usuario)) {

            return redirect('/');
        }
        $consulta = "SELECT * FROM movies WHERE upload =" . $usuario->id . ";";
        $movies =  DB::select($consulta);
        return view('profile.singlePublic', ['usuario' => $usuario, 'movies' => $movies]);
    }
}
