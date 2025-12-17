<?php
include("conexion.php");
$sentencia = "select * from socios";
$consulta = mysqli_query($conexion, $sentencia)
or die("Error de Consulta");
echo "El numero de registros es ".mysqli_num_rows($consulta)."<br>";
while($fila = mysqli_fetch_array($consulta)){
$codsocio = $fila['codsocio'];
$nombre = $fila['nombre'];
$apellidos = $fila['apellidos'];
$direccion = $fila['direccion'];
$telefono = $fila['telefono'];
$poblacion = $fila['poblacion'];
echo "$codsocio.- $nombre $apellidos - $direccion - $telefono -
$poblacion<br>";
}
mysqli_free_result($consulta);
include("desconexion.php");
?>