<?php
session_start();
require_once __DIR__ . '/../models/Usuario.php';

class Usuario {
    public static function verificarLogin($usuario, $password) {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE usuario = ?");
        $stmt->execute([$usuario]);
        $user = $stmt->fetch();

        if ($user && hash('sha256', $password) === $user['password']) {
            return $user;
        }
        return false;
    }
}
