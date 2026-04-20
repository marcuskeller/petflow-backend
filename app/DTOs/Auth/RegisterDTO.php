<?php

namespace App\DTOs\Auth;

use Illuminate\Http\Request;

readonly class RegisterDTO {
    public function __construct(
        public string $name,
        public string $email,
        public string $password,
    ) {}

    public static function fromRequest(Request $request): self
    {
        return new self(
            name: $request->string('name'),
            email: $request->string('email'),
            password: $request->string('password'),
        );
    }
}
