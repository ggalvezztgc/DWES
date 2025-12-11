<?php
session_start();

if (isset($_POST['usuario']) && isset($_POST['pass'])) {
    if ($_POST['usuario'] === 'ADMIN' && $_POST['pass'] === 'PASS') {
        $_SESSION['usuario'] = 'ADMIN';
        $_SESSION['ultima']  = time();
        header("Location: TEMARIO.PHP");
        exit;
    } else {
        $error = "Usuario o contraseña incorrectos.";
    }
} else {
    $error = "Acceso no válido.";
}
?>
<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>CONTROL</title></head>
<body>
<p style="color:red;"><?php echo $error; ?></p>
<a href="CURSO.PHP">Volver</a>
</body>
</html>
