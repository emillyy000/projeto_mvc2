<?php
declare(strict_types=1);

// Evita o aviso do editor de código para a constante definida no front controller
if (!defined('BASE_URL')) {
    define('BASE_URL', '');
}

// e(): escapa texto para HTML (previne XSS)[cite: 46]
function e(?string $value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

// url(): monta um link interno respeitando o BASE_URL[cite: 46]
function url(string $path = ''): string
{
    return BASE_URL . '/' . ltrim($path, '/');
}

// asset(): monta o link de um arquivo estático com cache busting[cite: 46]
function asset(string $path): string
{
    $file = __DIR__ . '/../public/' . ltrim($path, '/');
    $version = is_file($file) ? filemtime($file) : time();
    return BASE_URL . '/' . ltrim($path, '/') . '?v=' . $version;
}

// format_cpf(): formata CPF para exibição[cite: 71]
function format_cpf(?string $cpf): string
{
    $cpf = (string) $cpf;
    return strlen($cpf) === 11
        ? substr($cpf, 0, 3) . '.' . substr($cpf, 3, 3) . '.' . substr($cpf, 6, 3) . '-' . substr($cpf, 9, 2)
        : $cpf;
}

// format_date(): formata data para o padrão brasileiro[cite: 71]
function format_date(?string $date): string
{
    $d = $date ? DateTime::createFromFormat('Y-m-d', $date) : false;
    return $d ? $d->format('d/m/Y') : '';
}