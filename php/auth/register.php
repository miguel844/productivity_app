<?php
session_start();

require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../models/user.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: ../../index.php?page=register");
    exit;
}

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$password = filter_input(INPUT_POST, 'password');
$confirmPassword = filter_input(INPUT_POST, 'confirm_password');

$errors = [];

$user = false;

// Comprobamos el nombre
$name = trim($name);
if (strlen($name) < 3) $errors[] = "El nombre debe tener más de 3 carácteres";

// Comprobamos el email
$email = trim($email);
if (!preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $email)) $errors[] = "El email no es válido";


// Comprobamos la contraseña
$password = trim($password);
if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/', $password)) $errors[] = "La contraseña no es válida";


$confirmPassword = trim($confirmPassword);
if ($password !== $confirmPassword) $errors[] = "Las contraseñas no coinciden";

// Comprobamos si hay errores
if (!empty($errors)) {
    // Mostramos los errores en pages/register.php
    $_SESSION['errors'] = $errors;
    $_SESSION['old'] = [
        'name' => $name,
        'email' => $email
    ];
    header("Location: ../../index.php?page=register");
    exit;
}

// Comprobamos si existe el correo en nuestra DB
$user = getUserByEmail($pdo, $email);

if ($user !== false) {
    $_SESSION['errors'] = ['El correo electrónico ya está registrado.'];

    $_SESSION['old'] = [
        'name' => $name,
        'email' => $email
    ];
    header("Location: ../../index.php?page=register");
    exit;
}

$passwordHash = password_hash($password, PASSWORD_DEFAULT);

if (createUser($pdo, $name, $email, $passwordHash)) {
    $_SESSION['userCreated'] = "El usuario ha sido creado correctamente";
    $_SESSION['loginEmail'] = $email;
    header("Location: ../../index.php?page=login");
    exit;
} else {
    $_SESSION['errors'] = ['Ha ocurrido un error al crear la cuenta.'];

    header("Location: ../../index.php?page=register");
    exit;
}
