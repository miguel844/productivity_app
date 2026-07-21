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


/*

define('DB_HOSTNAME', 'mysql-miguel844.alwaysdata.net');
define('DB_USER', 'miguel844');
define('DB_PASSWORD', 'Mi5121988');

define('DB_SCHEMA', 'miguel844_macm');





define('DB_HOSTNAME', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

define('DB_SCHEMA', 'macm_hub');
*/