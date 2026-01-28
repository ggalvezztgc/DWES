<?php
$conexion = mysqli_connect("localhost","root","","concesionario")
or die("Error de conexion");
mysqli_set_charset($conexion,"utf8");

$sql = "SELECT * FROM coches";
$resultado = mysqli_query($conexion, $sql);

while ($fila = mysqli_fetch_array($resultado)) {
echo $fila['matricula']." - ".
     $fila['marca']." - ".
     $fila['modelo']." - ".
     $fila['precio']." €<br>";
}

mysqli_close($conexion);
?>
