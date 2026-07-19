<?php

define('DB_HOSTNAME', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

define('DB_SCHEMA', 'macm_hub');


define(
    'DB_DSN',
    'mysql:host=' . DB_HOSTNAME .
        ';dbname=' . DB_SCHEMA .
        ';charset=utf8mb4'
);


try {
    // Opciones recomendadas
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];

    // Creamos la conexion
    $pdo = new PDO(DB_DSN, DB_USER, DB_PASSWORD, $options);
} catch (PDOException $e) {
    // Manejo del error y detendra la ejecucion del codigo con el die
    die('Error: ' . $e->getMessage());
}
