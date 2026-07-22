<?php
session_start();

// Conexion base de datos
require_once __DIR__ .'/config/database.php';

// Enrutador
if (isset($_SESSION['user'])) {
    // Include zona privada
} else {
    $page = $_GET['page'] ?? null;

    switch ($page){
        case 'login':
        include_once __DIR__ .'/pages/public/login.php';
        break;
        case 'register':
        include_once __DIR__ .'/pages/public/register.php';
        break;
        case 'dashboard':
        include_once __DIR__ .'/pages/private/dashboard.php';
        break;
        
        default:
        include_once __DIR__ .'/pages/public/home.php';
    }
}
