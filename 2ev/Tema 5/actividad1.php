<?php
if (isset($_POST['nombre'])) {
    $nombre = $_POST['nombre'];

    setcookie("usuario", $nombre, time() + 3600);

    header("Location: ej1.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>Ejercicio 1</title></head>
<body>
<?php
if (isset($_COOKIE['usuario'])) {
    echo "<h3>Bienvenido, " . htmlspecialchars($_COOKIE['usuario']) . "</h3>";
} else {
    echo "<h3>No te conozco todavía 😅</h3>";
}
?>
<form method="POST" action="">
    Introduce tu nombre:
    <input type="text" name="nombre" required>
    <input type="submit" value="Guardar nombre">
</form>
</body>
</html>
