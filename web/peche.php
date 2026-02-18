<?php

try {
    $host = getenv("MYSQL_ADDON_HOST");
    $port = getenv("MYSQL_ADDON_PORT");
    $name = getenv("MYSQL_ADDON_DB");
    $user = getenv("MYSQL_ADDON_USER");
    $pass = getenv("MYSQL_ADDON_PASSWORD");

    $db = new PDO(
        "mysql:host={$host};port={$port};dbname={$name};charset=utf8mb4",
        $user,
        $pass,
        [
            PDO::ATTR_TIMEOUT => 10,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    );

    echo "My beautiful DB!";
} catch (PDOException $e) {
    die('Erreur : ' . $e->getMessage());
}