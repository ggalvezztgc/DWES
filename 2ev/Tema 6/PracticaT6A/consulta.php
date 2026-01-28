<form method="post">
Matricula: <input type="text" name="matricula">
<input type="submit" value="Buscar">
</form>

<?php
if (isset($_POST['matricula'])) {
include("conexion.php");

$sql = "SELECT * FROM coches WHERE matricula='$_POST[matricula]'";
$resultado = mysqli_query($conexion, $sql);

if ($fila = mysqli_fetch_array($resultado)) {
echo "Marca: ".$fila['marca']."<br>";
echo "Modelo: ".$fila['modelo']."<br>";
echo "Precio: ".$fila['precio']."<br>";
} else {
echo "Coche no encontrado";
}

mysqli_close($conexion);
}
?>
