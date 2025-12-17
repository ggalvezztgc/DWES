<form action="" name="formulario" method="post">
Codigo Socio <input type="text" name="codsocio"><br>
<input type="submit" value="Mostrar"name="boton">
</form>
<?php
if (isset($_POST["boton"])){
if ($_POST["boton"]=="Mostrar"){
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
echo "<br>";
echo "<form action='' name='formulario2' method='post'>";
echo "<input type='hidden' name='codsocio' value='$codsocio'>";
echo "<input type='submit' value='Eliminar'name='boton'>";
echo "</form>";
include("desconexion.php");
}
else
{
echo "Registro no encontrado.<br>";
}
}
if ((isset($_POST["boton"])) && ($_POST["boton"]=="Eliminar")){
include("conexion.php");
$codsocio = $_POST['codsocio'];
$sentencia = "delete from socios where codsocio=$codsocio";
$consulta = mysqli_query($conexion, $sentencia)
or die("Error de Consulta");
if (mysqli_affected_rows($conexion)!=0) {
echo "El registro ha sido eliminado con exito<br>";
}
else
{
echo "El registro NO ha sido eliminado con exito<br>";
}
include("desconexion.php");
}
}
?>