<?php

namespace App\Models;

use PDO;

class Database
{
    private static ?PDO $pdo = null;

    public static function connect(): PDO
    {
        if (self::$pdo !== null) {
            return self::$pdo;
        }

        $db = require __DIR__ . '/../../config/database.php';

        self::$pdo = new PDO(
            "mysql:host={$db['host']};port={$db['port']};dbname={$db['name']};charset={$db['charset']}",
            $db['user'],
            $db['pass'],
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ]
        );

        return self::$pdo;
    }
}
