<?php
$conexion = mysqli_connect("localhost","root","","concesionario")
or die("Error de conexion");
mysqli_set_charset($conexion,"utf8");
?>

<form method="post">
Matricula: <input type="text" name="matricula"><br>
Marca: <input type="text" name="marca"><br>
Modelo: <input type="text" name="modelo"><br>
Tipo: <input type="text" name="tipo"><br>
Motor: <input type="text" name="motor"><br>
Color: <input type="text" name="color"><br>
Cilindrada: <input type="text" name="cilindrada"><br>
Precio: <input type="text" name="precio"><br>
Extras: <input type="text" name="extras"><br>
<input type="submit" name="boton" value="Insertar">
</form>

<?php
if (isset($_POST['boton'])) {

$sql = "INSERT INTO coches VALUES (
'$_POST[matricula]',
'$_POST[marca]',
'$_POST[modelo]',
'$_POST[tipo]',
'$_POST[motor]',
'$_POST[color]',
$_POST[cilindrada],
$_POST[precio],
'$_POST[extras]'
)";

mysqli_query($conexion, $sql) or die("Error al insertar");
echo "Coche insertado correctamente";

}
mysqli_close($conexion);
?>
