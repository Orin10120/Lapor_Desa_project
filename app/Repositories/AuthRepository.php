<?php

namespace App\Repositories;

use App\interfaces\AuthRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class AuthRepository implements AuthRepositoryInterface
{
    public function login(array $credentials)
    {
        return Auth::attempt($credentials);
    }

    public function logout()
    {
       return Auth::logout();
    }
}
