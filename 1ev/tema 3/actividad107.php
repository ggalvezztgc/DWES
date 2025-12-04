<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];

    $usuarioCorrecto = "admin";
    $contrasenaCorrecta = "1234";

    if ($usuario === $usuarioCorrecto && $contrasena === $contrasenaCorrecta) {
        echo "<h3>Acceso al área del administrador</h3>";
    } else {
        echo "<h3>Datos de acceso no correctos. No se puede acceder al Área del Administrador.</h3>";
    }
} else {
?>
<form method="post">
    Usuario: <input type="text" name="usuario"><br>
    Contraseña: <input type="password" name="contrasena"><br><br>
    <input type="submit" value="Acceder">
</form>
<?php
}
?>
