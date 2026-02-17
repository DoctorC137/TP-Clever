<?php

try {
    $db = new PDO('mysql:host='.getenv("MYSQL_ADDON_HOST").';port=3306;dbname='.getenv("MYSQL_ADDON_DB"), getenv("MYSQL_ADDON_USER"), getenv("MYSQL_ADDON_PASSWORD"),
    array(
        PDO::ATTR_TIMEOUT => 10, // in seconds
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ));
    echo "My beautiful DB!";
} catch (PDOException $e) {
    die('Erreur : '.$e->getMessage());
}