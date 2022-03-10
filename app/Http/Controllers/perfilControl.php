<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use Validator;

class perfilControl extends Controller
{
    public function fotoChange(Request $request)
    {
        $rules = [
            'id' => 'required',
            'foto' => 'required|max:255'
        ];
        $messages = [
            'id.required' => 'SE REQUIERE EL ID',
            'foto.required' => 'SE REQUIERE LA URL DE LA FOTO',
            'foto.max' => 'LA URL ES MUY LARGA'
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return redirect()->back()->with('ERROR', $errors);
        }
        try {
            $us = user::find($request->id);
            $us->foto = $request->foto;
            $us->save();
        } catch (\Exception $e) {
            return redirect()->back()->with('ERROR', $e);
        }
        return redirect()->back()->with('success', 'SE GUARDARON LOS CAMBIOS');
    }

    public function perfilShow($id)
    {
        if (auth()->user()->id == $id) {
            $usuario = user::find($id);
            if (is_null($usuario)) {

                return redirect('/');
            }
            return view('profile.change', ['usuario' => $usuario]);
        } else {
            return redirect('/');
        }
    }

    public function favoritProfile()
    {
        return view('profile.userFavorite');
    }

    public function singleProfile($id)
    {
        $usuario = User::find($id);
        if (is_null($usuario)) {

            return redirect('/');
        }
        $consulta = "SELECT * FROM movies WHERE upload =" . $usuario->id . ";";
        $movies =  DB::select($consulta);
        return view('profile.singlePublic', ['usuario' => $usuario, 'movies' => $movies]);
    }

    public function updateProfile(Request $request)
    {
        $rules = [
            'id' => 'required'
        ];
        $messages = [
            'id.required' => 'SE REQUIERE EL ID'
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return redirect()->back()->with('ERROR', $errors);
        }
        try {
            $us = user::find($request->id);
            $us->sobremi = $request->sobremi;
            $us->instagram = $request->instagram;
            $us->facebook = $request->facebook;
            $us->save();
        } catch (\Exception $e) {
            return redirect()->back()->with('ERROR', $e);
        }
        return redirect()->back()->with('success', 'SE GUARDARON LOS CAMBIOS');
    }
}
