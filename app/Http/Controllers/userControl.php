<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\nivel;
use DB;
use Validator;

class userControl extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function nivelStore(Request $request)
    {
        $rules = [
            'titulonivel' => 'required|max:255'
        ];
        $messages = [
            'titulonivel.required' => 'SE REQUIERE EL TITULO',
            'titulonivel.max' => 'EL TITULO ES MUY LARGO'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return redirect()->back()->with('ERROR', $errors);
        }

        try {
            $nivel = new nivel();
            $nivel->nivel = 1432;
            $nivel->titulonivel = $request->titulonivel;
            $nivel->save();
        } catch (\Exception $e) {
            return redirect()->back()->with('ERROR', $e);
        }
        return redirect()->back()->with('success', 'SE AÑADIO EL NIVEL');
    }

    public function controlUsShow()
    {
        $user = User::all();
        $lvl = nivel::all();
        return view('administrador.controlUsuarios', ['user' => $user, 'nivel' => $lvl]);
    }

    public function bloqUs(Request $request)
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
            $user = User::find($request->id);
            $user->bloqueado = 1;
            $user->save();
        } catch (\Exception $e) {
            return redirect()->back()->with('ERROR', $e);
        }
        return redirect()->back()->with('success', 'SE BLOQUEO AL USUARIO ' . $user->name . ' DE MANERA CORRECTA');
    }

    public function cambiarLvl(Request $request)
    {
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
            if (is_null($user)) {
                return redirect()->back()->with('ERROR', 'ESE ID ES INVALIDO');
            }
            $user->nivel = $request->nivel;
            $user->save();
        } catch (\Exception $e) {
            return redirect()->back()->with('ERROR', $e);
        }
        return redirect()->back()->with('success', 'SE CAMBIO EL NIVEL DE ' . $user->name . ' DE MANERA CORRECTA');
    }
}
