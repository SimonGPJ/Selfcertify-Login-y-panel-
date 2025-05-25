<?php
session_start();
if ($_SESSION['rol'] !== 'admin') {
    echo "Acceso denegado.";
    exit;
}
require_once __DIR__ . '/../config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nuevoContenido = $_POST['contenido'];
    $stmt = $pdo->prepare("UPDATE sobre_proyecto SET contenido = ? WHERE id = 1");
    $stmt->execute([$nuevoContenido]);
}

$stmt = $pdo->query("SELECT contenido FROM sobre_proyecto WHERE id = 1");
$contenido = $stmt->fetchColumn();
?>
<!DOCTYPE html>
<html>
<head><title>Editar Sobre</title></head>
<body>
    <h2>Editar Contenido del Proyecto</h2>
    <form method="POST">
        <textarea name="contenido" rows="10" cols="50"><?= htmlspecialchars($contenido) ?></textarea><br>
        <button type="submit">Guardar</button>
    </form>
    <p><a href="../views/dashboard.php">Volver al panel</a></p>
</body>
</html>
