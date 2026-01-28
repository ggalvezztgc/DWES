<form method="post">
Matricula: <input type="text" name="matricula"><br>
Nuevo precio: <input type="text" name="precio"><br>
<input type="submit" value="Actualizar">
</form>

<?php
if (isset($_POST['precio'])) {
include("conexion.php");

$sql = "UPDATE coches SET precio=$_POST[precio]
WHERE matricula='$_POST[matricula]'";

mysqli_query($conexion, $sql);
echo "Precio actualizado";

mysqli_close($conexion);
}
?>
