<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head><title>Panel</title></head>
<body>
    <h2>Bienvenido, <?= $_SESSION['usuario'] ?> (<?= $_SESSION['rol'] ?>)</h2>
    <p><a href="../sobre/editar.php">Editar "Sobre el proyecto"</a></p>
    <p><a href="../index.php?logout=1">Cerrar sesión</a></p>
</body>
</html>
