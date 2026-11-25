<?php
declare(strict_types=1);

namespace App\Controllers;

class AuthController
{
    public function login()
    {
        $title = 'Entrar';

        // Captura o conteúdo da página de login
        ob_start();
        require __DIR__ . '/../Views/auth/login.php';
        $content = ob_get_clean();

        // Carrega o layout principal do site
        require __DIR__ . '/../Views/layouts/main.php';
    }
}