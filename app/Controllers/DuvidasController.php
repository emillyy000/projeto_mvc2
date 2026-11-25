<?php

declare(strict_types=1);

namespace App\Controllers;

class DuvidasController
{
    public function index(): void
    {
        $title = 'Perguntas frequentes';

        ob_start();

        require __DIR__ . '/../Views/duvidas.php';

        $content = ob_get_clean();

        require __DIR__ . '/../Views/layouts/main.php';
    }
}