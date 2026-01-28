<?php
$conexion = mysqli_connect("localhost","root","","concesionario")
or die("Error de conexion");
mysqli_set_charset($conexion,"utf8");
?>

<form method="post">
Matricula: <input type="text" name="matricula"><br>
Nuevo precio: <input type="text" name="precio"><br>
<input type="submit" value="Actualizar">
</form>

<?php
if (isset($_POST['precio'])) {

$sql = "UPDATE coches SET precio=$_POST[precio]
WHERE matricula='$_POST[matricula]'";

mysqli_query($conexion, $sql);
echo "Precio actualizado correctamente";
}
mysqli_close($conexion);
?>
