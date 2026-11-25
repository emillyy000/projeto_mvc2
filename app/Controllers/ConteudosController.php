<?php
declare(strict_types=1);

namespace App\Controllers;

class ConteudosController
{
    public function index()
    {
        require __DIR__ . '/../Views/conteudos.php';
    }
}