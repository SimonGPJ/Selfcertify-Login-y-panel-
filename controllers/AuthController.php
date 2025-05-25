<?php
session_start();
require_once __DIR__ . '/../models/Usuario.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $user = Usuario::verificarLogin($usuario, $password);
    if ($user) {
        $_SESSION['usuario'] = $user['usuario'];
        $_SESSION['rol'] = $user['rol'];
        header('Location: ../views/dashboard.php');
    } else {
        header('Location: ../views/login.php?error=1');
    }
}
