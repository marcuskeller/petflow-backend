<?php

namespace App\Http\Controllers;

class UsersController extends Controller
{
    public function getUsers()
    {
        return response()->json([
            'users' => [
                ['nome' => 'João', 'idade' => 20, 'cidade' => 'Sorocaba'],
                ['nome' => 'Maria', 'idade' => 25, 'cidade' => 'São Paulo'],
                ['nome' => 'Pedro', 'idade' => 30, 'cidade' => 'Rio de Janeiro'],
            ],
        ]);
    }
}
