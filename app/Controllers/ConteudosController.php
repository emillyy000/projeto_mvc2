<?php

declare(strict_types=1);

namespace App\Controllers;

class ConteudosController
{
    public function index(): void
    {
        $title = 'Conteúdos educativos';

        ob_start();

        require __DIR__ . '/../Views/conteudos.php';

        $content = ob_get_clean();

        require __DIR__ . '/../Views/layouts/main.php';
    }
}