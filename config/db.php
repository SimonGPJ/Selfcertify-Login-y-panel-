<?php
$host = 'localhost';
$db   = 'selfcertifity';
$port = '3307';
$user = 'selfcertify_user';
$pass = 'Uq9#xLp42!vmZ8@'; 
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE =>PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES =>false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    error_log('Error de conexión: ' . $e->getMessage());
    die('Error de conexión. Contacte al administrador.');
}
