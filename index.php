<?php
session_start();

if (isset($_SESSION['user'])) {
    // Include zona privada
} else {
    include_once __DIR__ .'/pages/home.php';
}
