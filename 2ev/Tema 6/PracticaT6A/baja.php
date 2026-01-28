<?php
$conexion = mysqli_connect("localhost","root","","concesionario")
or die("Error de conexion");
mysqli_set_charset($conexion,"utf8");
?>

<form method="post">
Matricula: <input type="text" name="matricula">
<input type="submit" value="Eliminar">
</form>

<?php
if (isset($_POST['matricula'])) {

$sql = "DELETE FROM coches WHERE matricula='$_POST[matricula]'";
mysqli_query($conexion, $sql);

if (mysqli_affected_rows($conexion) > 0)
  echo "Coche eliminado correctamente";
else
  echo "El coche no existe";
}
mysqli_close($conexion);
?>
