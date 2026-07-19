<?php
session_start();

if (isset($_SESSION['user'])) {
    // Include zona privada
} else {
    $page = $_GET['page'] ?? null;

    switch ($page){
        case 'login':
        include_once __DIR__ .'/pages/login.php';
        break;
        case 'register':
        include_once __DIR__ .'/pages/register.php';
        break;
        
        default:
        include_once __DIR__ .'/pages/home.php';
    }
}
