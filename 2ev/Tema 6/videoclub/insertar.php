<form action="" name="formulario" method="post">
Codigo Socio <input type="text" name="codsocio"><br>
Nombre <input type="text" name="nombre"><br>
Apellidos <input type="text" name="apellidos"><br>
Direccion <input type="text" name="direccion"><br>
Telefono <input type="text" name="telefono"><br>
Poblacion <input type="text" name="poblacion"><br>
<input type="submit" value="Insertar" name="boton">
</form>
<?php
if (isset($_POST['boton'])){
include("conexion.php");
$codsocio = $_POST['codsocio'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$poblacion = $_POST['poblacion'];
$sentencia = "insert into socios values($codsocio,'$nombre',
'$apellidos','$direccion','$telefono','$poblacion')";
$consulta = mysqli_query($conexion, $sentencia)
or die("Error de Consulta");
if (mysqli_affected_rows($conexion)!=0) {
echo "El registro ha sido insertado con exito<br>";
}
include("desconexion.php");
}
?>