<form action="" name="formulario" method="post">
Codigo Socio <input type="text" name="codsocio"><br>
<input type="submit" value="Mostrar">
</form>
<?php
if (isset($_POST["codsocio"])){
include("conexion.php");
$codsocio = $_POST['codsocio'];
$sentencia = "select * from socios where CODSOCIO=$codsocio";
$consulta = mysqli_query($conexion, $sentencia)
or die("Error de Consulta");
if ($fila = mysqli_fetch_array($consulta)){
$codsocio = $fila['codsocio'];
$nombre = $fila['nombre'];
$apellidos = $fila['apellidos'];
$direccion = $fila['direccion'];
$telefono = $fila['telefono'];
$poblacion = $fila['poblacion'];
echo "Codigo: $codsocio<br>";
echo "Nombre: $nombre<br>";
echo "Apellidos: $apellidos<br>";
echo "Direccion: $direccion<br>";
echo "Telefono: $telefono<br>";
echo "Poblacion: $poblacion<br>";
mysqli_free_result($consulta);
}
else
{
echo "Registro no encontrado.<br>";
}
include("desconexion.php");
}
else
{
echo "Introduzca codigo de socio que queremos mostrar.<br>";
}
?>
