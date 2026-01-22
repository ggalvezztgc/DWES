<?php
$conexion = new mysqli("localhost", "root", "", "concesionario");
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Concesionario</title>
</head>
<body>
<h2>Menú Concesionario</h2>
<ul>
    <li><a href="altadecoche.php">Alta de coche</a></li>
    <li><a href="bajadecoche.php">Baja de coche</a></li>
    <li><a href="consultadecoche.php">Consulta de coche</a></li>
    <li><a href="actualizaciondecoche.php">Actualización de coche</a></li>
    <li><a href="listadocoches.php">Listado de coches</a></li>
</ul>
</body>
</html>
