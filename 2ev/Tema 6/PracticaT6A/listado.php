<?php
include("conexion.php");

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
