<?php
declare(strict_types=1);

namespace App\Controllers;

class DuvidasController
{
    public function index()
    {
        $title = 'Perguntas frequentes';

        require __DIR__ . '/../Views/duvidas.php';
    }
}