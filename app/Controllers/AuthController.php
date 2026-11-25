<?php
declare(strict_types=1);

namespace App\Controllers;

class AuthController
{
    public function login()
    {
        $title = 'Entrar';

        require __DIR__ . '/../Views/auth/login.php';
    }
}