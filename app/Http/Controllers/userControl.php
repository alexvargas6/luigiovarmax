<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class userControl extends Controller {

    public function controlUsShow() {
        $user = User::all();
        return view('administrador.controlUsuarios', ['user' => $user]);
    }

    public function bloqUs(Request $request) {
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
            $user = User::find($request->id);
            $user->bloqueado = 1;
            $user->save();
        } catch (\Exception $e) {
            return redirect()->back()->with('ERROR', $e);
        }
        return redirect()->back()->with('success', 'SE BLOQUEO AL USUARIO' . $user->name . 'DE MANERA CORRECTA');
    }

    public function cambiarLvl(Request $request) {
        $rules = [
            'id' => 'required',
            'nivel' => 'required'
        ];
        $messages = [
            'id.required' => 'SE REQUIERE EL ID',
            'nivel.required' => 'SE REQUIERE ESPECIFICAR EL NIVEL'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return redirect()->back()->with('ERROR', $errors);
        }

        try {
            $user = User::find($request->id);
            $user->nivel = $request->nivel;
            $user->save();
        } catch (\Exception $e) {
            return redirect()->back()->with('ERROR', $e);
        }
        return redirect()->back()->with('success', 'SE BLOQUEO AL USUARIO' . $user->name . 'DE MANERA CORRECTA');
    }

}
