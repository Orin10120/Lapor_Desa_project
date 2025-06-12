<?php

namespace App\interfaces;

interface AuthRepositoryInterface {
    public function login(array $credentials);

    public function logout();
}
