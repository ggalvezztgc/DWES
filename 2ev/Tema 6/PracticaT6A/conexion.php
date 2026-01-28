<?php
$host = "localhost";
$user = "root";
$pass = "";
$bd = "concesionario";

$conexion = mysqli_connect($host, $user, $pass, $bd)
or die("Error de conexion");

mysqli_set_charset($conexion, "utf8");
?>
