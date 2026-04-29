<?php

namespace App\Http\Controllers\Auth;

use App\DTOs\Auth\RegisterDTO;
use App\Http\Controllers\Controller;
use App\UseCases\Auth\RegisterUserUseCase;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisteredUserController extends Controller
{
    private RegisterUserUseCase $registerUserUseCase;

    public function __construct(RegisterUserUseCase $registerUserUseCase)
    {
        $this->registerUserUseCase = $registerUserUseCase;
    }

    public function store(Request $request): JsonResponse
    {
        $dto = RegisterDTO::fromRequest($request);
        $user = $this->registerUserUseCase->execute($dto);

        Auth::login($user);

        return response()->json([
            'user' => $user,
            'message' => 'Usuário cadastrado com sucesso!'
        ], 201);
    }
}
