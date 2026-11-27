<?php

namespace App\Controllers;

class SobreController
{
    public function index(): void
    {
        $title = 'Sobre a NutriUp';

        ob_start();
        require __DIR__ . '/../Views/sobre/index.php';
        $content = ob_get_clean();

        require __DIR__ . '/../Views/layouts/main.php';
    }
}