<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato(Request $request) {

        print_r($request->all());
        return view('site.contato');
    }
}
