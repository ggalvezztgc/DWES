<form id="form1" method="post" action="">
Codigo Socio: <input type="text" name="codsocio"><br>
<input type="submit" name="boton" value="Consultar"><br>
</form>
<?php
if ((isset($_POST['boton'])) && ($_POST['boton'] == 'Consultar')){
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
echo "<form id='form2' action='' method='post'>";
echo "Codigo Socio:
<input type='text' value='$codsocio' name='codsocio'
readonly><br>";
echo "Nombre:
<input type='text' value='$nombre' name='nombre'><br>";
echo "Apellidos:
<input type='text' value='$apellidos' name='apellidos'><br>";
echo "Direccion:
<input type='text' value='$direccion' name='direccion'><br>";
echo "Telefono:
<input type='text' value='$telefono' name='telefono'><br>";
echo "Poblacion:
<input type='text' value='$poblacion' name='poblacion'><br>";
echo "<input type='submit' name='boton' value='Actualizar'><br>";
echo "</form>";
}
mysqli_free_result($consulta);
include("desconexion.php");
}
else
{
echo "Registro no encontrado.<br>";
}
}
if ((isset($_POST['boton'])) && ($_POST['boton'] == 'Actualizar')){
$codsocio = $_POST['codsocio'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$poblacion = $_POST['poblacion'];
include("conexion.php");
$sentencia = "UPDATE socios SET nombre='$nombre',apellidos='$apellidos',
direccion='$direccion', telefono='$telefono', poblacion='$poblacion' where
codsocio=$codsocio";
$consulta = mysqli_query($conexion, $sentencia)
or die("Error de Consulta");
echo "Registro ha sido actualizado con exito<br>";
include("desconexion.php");
}
?>