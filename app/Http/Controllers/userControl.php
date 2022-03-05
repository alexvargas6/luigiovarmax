<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class userControl extends Controller
{
    public function controlUsShow()
    {
        $user = User::all();
        return view('administrador.controlUsuarios', ['user' => $user]);
    }
}
