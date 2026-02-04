<?php

$host = "127.0.0.1";
$user = "root";
$pass = "";
$db   = "videoclub";
$port = 3306;

$conexion = new mysqli($host, $user, $pass, $db, $port);

if ($conexion->connect_error) {
    die("Error de conexión a la base de datos");
}
