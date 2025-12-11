<?php
session_start();

if (!isset($_SESSION['inicio'])) {
    $_SESSION['inicio'] = time();
}
?>
<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>TIEMPO</title></head>
<body>
<h3>Página de tiempo</h3>
<p>Has entrado en: <?php echo date("H:i:s", $_SESSION['inicio']); ?></p>
<a href="SALIR.PHP">SALIR</a>
</body>
</html>
