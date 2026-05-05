<?php

namespace App\UseCases\Auth;

use App\DTOs\Auth\LoginDTO;
use App\Models\Entity\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginUseCase
{
    public function execute(LoginDTO $dto, bool $remember = false): User
    {
        $credentials = ['email' => $dto->email, 'password' => $dto->password];

        if (! Auth::attempt($credentials, $remember)) {
            throw ValidationException::withMessages([
                'email' => __('auth.failed'),
            ]);
        }

        return Auth::user();
    }
}
