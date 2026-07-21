<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    // header("Location: ../../index.php?page=register");
    // exit;
    die("Cuando sepa mandaremos al usuario de vuelta a la pagina de registro");
}

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$password = filter_input(INPUT_POST, 'password');
$confirmPassword = filter_input(INPUT_POST, 'confirm_password');

$errors = [];

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


if (!empty($errors)){
    // Mostramos los errores en pages/register.php
    $_SESSION['errors'] = $errors;
    $_SESSION['old'] = [
        'name' => $name,
        'email' => $email
    ];
    header("Location: ../../index.php?page=register");
    exit;
}






?>


<a href='../../index.php?page=register' class='text-brand hover:text-brand-hover'>Registro</a>