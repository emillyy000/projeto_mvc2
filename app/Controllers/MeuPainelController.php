<?php

namespace App\Controllers;

class MeuPainelController
{
    public function index(): void
    {
        $title = 'Meu painel';

        ob_start();
        require __DIR__ . '/../Views/meuPainel/index.php';
        $content = ob_get_clean();

        require __DIR__ . '/../Views/layouts/main.php';
    }
}