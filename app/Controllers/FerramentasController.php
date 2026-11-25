<?php
declare(strict_types=1);

namespace App\Controllers;

class FerramentasController
{
    public function index()
    {
        $title = 'Ferramentas';

        ob_start();
        require __DIR__ . '/../Views/ferramentas/index.php';
        $content = ob_get_clean();

        require __DIR__ . '/../Views/layouts/main.php';
    }
}