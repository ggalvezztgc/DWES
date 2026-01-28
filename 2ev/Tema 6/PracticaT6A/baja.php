<form method="post">
Matricula: <input type="text" name="matricula">
<input type="submit" value="Eliminar">
</form>

<?php
if (isset($_POST['matricula'])) {
include("conexion.php");

$sql = "DELETE FROM coches WHERE matricula='$_POST[matricula]'";
mysqli_query($conexion, $sql);

if (mysqli_affected_rows($conexion) > 0)
  echo "Coche eliminado";
else
  echo "No existe el coche";

mysqli_close($conexion);
}
?>
