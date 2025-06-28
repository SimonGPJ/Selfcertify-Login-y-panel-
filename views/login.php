<!DOCTYPE html>
<html lang ="es">
<head><title>Login</title></head>
<body>
    <h2>Iniciar Sesión</h2>
    <form action="../controllers/AuthController.php" method="POST">
        Usuario: <input type="text" name="usuario" required><br>
        Contraseña: <input type="password" name="password" required><br>
        <button type="submit">Entrar</button>
    </form>
    <?php
    if (isset($_GET['error'])) {
    echo "<p style='color:red;'>Credenciales incorrectas.</p>";
}
?>
</body>
</html>
