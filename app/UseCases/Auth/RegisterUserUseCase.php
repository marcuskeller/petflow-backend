<?php

namespace App\UseCases\Auth;

use App\DTOs\Auth\RegisterDTO;
use App\Models\Entity\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use InvalidArgumentException;

class RegisterUserUseCase {
    public function execute(RegisterDTO $registerDTO): User
    {
        if (User::query()->where('email', $registerDTO->email)->exists()) {
            throw new InvalidArgumentException('Este e-mail já está em uso.');
        }

        $user = User::query()->create([
            'name'     => $registerDTO->name,
            'email'    => $registerDTO->email,
            'password' => Hash::make($registerDTO->password),
        ]);

        event(new Registered($user));

        return $user;
    }
}
