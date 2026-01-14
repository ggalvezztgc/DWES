<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$base_datos = "tienda";
 
$conexion = new mysqli($servidor, $usuario, $password, $base_datos);
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
echo "Conexión exitosa con MySQL";

$sentencia = "SELECT Nombre FROM articulos";
$resultado = mysqli_query($conexion, $sentencia);
echo "<br>";
echo "Datos: ".mysqli_num_rows($resultado);
echo "<br>";
echo "  Nombres : ";
echo "<br>";
while($registro=mysqli_fetch_row($resultado)){
echo "<br>";
foreach($registro as $valor){
echo "<td class='campo'>".$valor;
}
}

$sentencia = "SELECT Nombre FROM articulos";
$resultado = mysqli_query($conexion, $sentencia);
echo "<br>";
echo "Datos: ".mysqli_num_rows($resultado);
echo "<br>";
echo "  Nombres : ";
echo "<br>";
while($registro=mysqli_fetch_row($resultado)){
echo "<br>";
foreach($registro as $valor){
echo "<td class='campo'>".$valor;
}
}

?>

