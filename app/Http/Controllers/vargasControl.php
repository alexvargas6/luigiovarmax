<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vargasControl extends Controller {

    public function docente() {
        return view('vargas.docente');
    }

    public function campusShow() {
        return view('vargas.campus');
    }

    public function licenShow() {
        return view('vargas.lic');
    }

    public function noEsco() {
        return view('vargas.noEsc');
    }

    public function menuShow() {
        return view('vargas.indexSchool');
    }

    public function libShow() {
        return view('vargas.library');
    }

    public function contactoShow() {
        return view('vargas.contacto');
    }

    public function bookShow() {
        return view('vargas.books');
    }

    public function aboutShow() {
        return view('vargas.about');
    }

    public function aboutMeShow() {
        return view('vargas.aboutMe');
    }

    public function insertar(Request $request) {
        return redirect()->back()->with('success', 'LISTO :)');
    }

}
