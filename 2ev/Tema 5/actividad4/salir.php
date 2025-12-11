<?php
session_start();
$fin = time();
if (isset($_SESSION['inicio'])) {
    $tiempo = $fin - $_SESSION['inicio'];
} else {
    $tiempo = 0;
}
session_destroy();
?>
<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>SALIR</title></head>
<body>
<h3>Tiempo en la página</h3>
<p>Has estado <?php echo $tiempo; ?> segundos en la página.</p>
<a href="TIEMPO.PHP">Volver a entrar</a>
</body>
</html>
