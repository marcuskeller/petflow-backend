<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ola extends Controller
{
    public function mostrarOla()
    {
        return response()->json([
            'mensagem' =>  'Hello World Controller!',
        ]);
    }
}
