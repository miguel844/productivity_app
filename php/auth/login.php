<?php
session_start();

require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../models/user.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: ../../index.php?page=login");
    exit;
}

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$password = filter_input(INPUT_POST, 'password');

$errors = [];


// Comprobamos el email
$email = trim($email);
if (!preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $email)) $errors[] = "El email no es válido";


// Comprobamos la contraseña
$password = trim($password);
if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/', $password)) $errors[] = "La contraseña no es válida";

// Comprobamos si hay errores
if (!empty($errors)) {
    // Mostramos los errores en pages/login.php
    $_SESSION['errors'] = $errors;
    $_SESSION['loginEmail'] = $email;
    header("Location: ../../index.php?page=login");
    exit;
}

// Comprobamos si existe el correo en nuestra DB
$user = getUserByEmail($pdo, $email);

if ($user === false) {
    $_SESSION['errors'] = ['Correo o contraseña incorrectos.'];
    $_SESSION['loginEmail'] = $email;
    header("Location: ../../index.php?page=login");
    exit;
}


if (password_verify($password,$user['password'])) {
        $_SESSION['currentUser'] = [
        'id' => $user['id'],
        'name' => $user['name'],
        'email' => $user['email']
    ];

    header("Location: ../../index.php?page=dashboard");
    exit;
} else {
    $_SESSION['errors'] = ['Ha ocurrido un error en el inicio de sesion.'];

    header("Location: ../../index.php?page=login");
    exit;
}







