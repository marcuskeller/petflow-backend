<?php

namespace App\Http\Controllers;

class Ola extends Controller
{
    public function mostrarOla()
    {
        return response()->json([
            'mensagem' => 'Hello World Controller!',
        ]);
    }
}
