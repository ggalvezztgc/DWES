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

echo "<hr>";
echo "<h3>Ejercicio A</h3>";

$sentencia = "SELECT * FROM articulos";
$resultado = mysqli_query($conexion, $sentencia);

echo "<br>";
echo "Datos: ".mysqli_num_rows($resultado);
echo "<br>";
echo "Todos los articulos:";
echo "<br>";

while($registro=mysqli_fetch_row($resultado)){
    echo "<br>";
    foreach($registro as $valor){
        echo "<td class='campo'>".$valor." | ";
    }
}

echo "<hr>";
echo "<h3>Ejercicio B</h3>";

$sentencia = "SELECT Nombre FROM articulos";
$resultado = mysqli_query($conexion, $sentencia);

echo "<br>";
echo "Datos: ".mysqli_num_rows($resultado);
echo "<br>";
echo "Nombres:";
echo "<br>";

while($registro = mysqli_fetch_row($resultado)){
    echo "<br>";
    foreach($registro as $valor){
        echo "<td class='campo'>".$valor." | ";
    }
}

echo "<hr>";
echo "<h3>Ejercicio C</h3>";

$sentencia = "SELECT Nombre, Precio FROM articulos";
$resultado = mysqli_query($conexion, $sentencia);

echo "<br>";
echo "Datos: ".mysqli_num_rows($resultado);
echo "<br>";
echo "Nombre y Precio:";
echo "<br>";

while($registro=mysqli_fetch_row($resultado)){
    echo "<br>";
    foreach($registro as $valor){
        echo "<td class='campo'>".$valor." | ";
    }
}

echo "<hr>";
echo "<h3>Ejercicio D</h3>";

$sentencia = "SELECT DISTINCT Nombre FROM articulos";
$resultado = mysqli_query($conexion, $sentencia);

echo "<br>";
echo "Datos: ".mysqli_num_rows($resultado);
echo "<br>";
echo "Nombres sin repetir:";
echo "<br>";

while($registro=mysqli_fetch_row($resultado)){
    echo "<br>";
    foreach($registro as $valor){
        echo "<td class='campo'>".$valor." | ";
    }
}

echo "<hr>";
echo "<h3>Ejercicio E</h3>";

$sentencia = "SELECT * FROM articulos WHERE Clave_articulo=5";
$resultado = mysqli_query($conexion, $sentencia);

echo "<br>";
echo "Datos: ".mysqli_num_rows($resultado);
echo "<br>";

while($registro=mysqli_fetch_row($resultado)){
    echo "<br>";
    foreach($registro as $valor){
        echo "<td class='campo'>".$valor." | ";
    }
}

echo "<hr>";
echo "<h3>Ejercicio F</h3>";

$sentencia = "SELECT * FROM articulos WHERE Nombre='Teclado'";
$resultado = mysqli_query($conexion, $sentencia);

echo "<br>";
echo "Datos: ".mysqli_num_rows($resultado);
echo "<br>";

while($registro=mysqli_fetch_row($resultado)){
    echo "<br>";
    foreach($registro as $valor){
        echo "<td class='campo'>".$valor." | ";
    }
}

echo "<hr>";
echo "<h3>Ejercicio G</h3>";

$sentencia = "SELECT * FROM articulos WHERE Nombre='Memoria RAM' OR Nombre='Memoria USB'";
$resultado = mysqli_query($conexion, $sentencia);

echo "<br>";
echo "Datos: ".mysqli_num_rows($resultado);
echo "<br>";

while($registro=mysqli_fetch_row($resultado)){
    echo "<br>";
    foreach($registro as $valor){
        echo "<td class='campo'>".$valor." | ";
    }
}

echo "<hr>";
echo "<h3>Ejercicio H</h3>";

$sentencia = "SELECT * FROM articulos WHERE Nombre LIKE 'M%'";
$resultado = mysqli_query($conexion, $sentencia);

echo "<br>";
echo "Datos: ".mysqli_num_rows($resultado);
echo "<br>";

while($registro=mysqli_fetch_row($resultado)){
    echo "<br>";
    foreach($registro as $valor){
        echo "<td class='campo'>".$valor." | ";
    }
}

echo "<hr>";
echo "<h3>Ejercicio I</h3>";

$sentencia = "SELECT Nombre FROM articulos WHERE Precio=10";
$resultado = mysqli_query($conexion, $sentencia);

echo "<br>";
echo "Datos: ".mysqli_num_rows($resultado);
echo "<br>";
echo "Precio = 10:";
echo "<br>";

while($registro=mysqli_fetch_row($resultado)){
    echo "<br>";
    foreach($registro as $valor){
        echo "<td class='campo'>".$valor." | ";
    }
}

echo "<hr>";
echo "<h3>Ejercicio J</h3>";

$sentencia = "SELECT Nombre FROM articulos WHERE Precio>20";
$resultado = mysqli_query($conexion, $sentencia);

echo "<br>";
echo "Datos: ".mysqli_num_rows($resultado);
echo "<br>";
echo "Precio > 20:";
echo "<br>";

while($registro=mysqli_fetch_row($resultado)){
    echo "<br>";
    foreach($registro as $valor){
        echo "<td class='campo'>".$valor." | ";
    }
}

echo "<hr>";
echo "<h3>Ejercicio K</h3>";

$sentencia = "SELECT * FROM articulos WHERE Precio BETWEEN 10 AND 35";
$resultado = mysqli_query($conexion, $sentencia);

echo "<br>";
echo "Datos: ".mysqli_num_rows($resultado);
echo "<br>";

while($registro=mysqli_fetch_row($resultado)){
    echo "<br>";
    foreach($registro as $valor){
        echo "<td class='campo'>".$valor." | ";
    }
}

echo "<hr>";
echo "<h3>Ejercicio L</h3>";

$sentencia = "SELECT AVG(Precio) FROM articulos";
$resultado = mysqli_query($conexion, $sentencia);

echo "<br>";
echo "Precio medio:";
echo "<br>";

while($registro=mysqli_fetch_row($resultado)){
    foreach($registro as $valor){
        echo "<td class='campo'>".$valor." | ";
    }
}

echo "<hr>";
echo "<h3>Ejercicio M</h3>";

$sentencia = "SELECT AVG(Precio) FROM articulos WHERE Clave_fabricante=2";
$resultado = mysqli_query($conexion, $sentencia);

echo "<br>";
echo "Precio medio fabricante 2:";
echo "<br>";

while($registro=mysqli_fetch_row($resultado)){
    foreach($registro as $valor){
        echo "<td class='campo'>".$valor." | ";
    }
}

echo "<hr>";
echo "<h3>Ejercicio N</h3>";

$sentencia = "SELECT Nombre, Precio FROM articulos ORDER BY Nombre";
$resultado = mysqli_query($conexion, $sentencia);

echo "<br>";
echo "Datos: ".mysqli_num_rows($resultado);
echo "<br>";

while($registro=mysqli_fetch_row($resultado)){
    echo "<br>";
    foreach($registro as $valor){
        echo "<td class='campo'>".$valor." | ";
    }
}

echo "<hr>";
echo "<h3>Ejercicio O</h3>";

$sentencia = "SELECT * FROM articulos ORDER BY Precio DESC";
$resultado = mysqli_query($conexion, $sentencia);

echo "<br>";
echo "Datos: ".mysqli_num_rows($resultado);
echo "<br>";

while($registro=mysqli_fetch_row($resultado)){
    echo "<br>";
    foreach($registro as $valor){
        echo "<td class='campo'>".$valor." | ";
    }
}

echo "<hr>";
echo "<h3>Ejercicio P</h3>";

$sentencia = "SELECT Nombre, Precio FROM articulos WHERE Precio>25 ORDER BY Precio DESC, Nombre";
$resultado = mysqli_query($conexion, $sentencia);

echo "<br>";
echo "Datos: ".mysqli_num_rows($resultado);
echo "<br>";

while($registro=mysqli_fetch_row($resultado)){
    echo "<br>";
    foreach($registro as $valor){
        echo "<td class='campo'>".$valor." | ";
    }
}

echo "<hr>";
echo "<h3>Ejercicio Q</h3>";

$sentencia = "SELECT * FROM articulos, fabricantes 
WHERE articulos.Clave_fabricante = fabricantes.Clave_fabricante";
$resultado = mysqli_query($conexion, $sentencia);

echo "<br>";
echo "Datos: ".mysqli_num_rows($resultado);
echo "<br>";

while($registro=mysqli_fetch_row($resultado)){
    echo "<br>";
    foreach($registro as $valor){
        echo "<td class='campo'>".$valor." | ";
    }
}

echo "<hr>";
echo "<h3>Ejercicio R</h3>";

$sentencia = "SELECT Clave_articulo, articulos.Nombre, fabricantes.Nombre 
FROM articulos, fabricantes 
WHERE articulos.Clave_fabricante = fabricantes.Clave_fabricante";
$resultado = mysqli_query($conexion, $sentencia);

echo "<br>";
echo "Datos: ".mysqli_num_rows($resultado);
echo "<br>";

while($registro=mysqli_fetch_row($resultado)){
    echo "<br>";
    foreach($registro as $valor){
        echo "<td class='campo'>".$valor." | ";
    }
}

echo "<hr>";
echo "<h3>Ejercicio S</h3>";

$sentencia = "SELECT articulos.Nombre, Precio 
FROM articulos, fabricantes 
WHERE articulos.Clave_fabricante = fabricantes.Clave_fabricante 
AND fabricantes.Nombre='Logitech' 
ORDER BY articulos.Nombre";
$resultado = mysqli_query($conexion, $sentencia);

echo "<br>";
echo "Datos: ".mysqli_num_rows($resultado);
echo "<br>";

while($registro=mysqli_fetch_row($resultado)){
    echo "<br>";
    foreach($registro as $valor){
        echo "<td class='campo'>".$valor." | ";
    }
}

echo "<hr>";
echo "<h3>Ejercicio T</h3>";

$sentencia = "SELECT articulos.Nombre, Precio, fabricantes.Nombre 
FROM articulos, fabricantes 
WHERE articulos.Clave_fabricante = fabricantes.Clave_fabricante 
AND (fabricantes.Nombre='Lexar' OR fabricantes.Nombre='Kingston') 
ORDER BY Precio DESC";
$resultado = mysqli_query($conexion, $sentencia);

echo "<br>";
echo "Datos: ".mysqli_num_rows($resultado);
echo "<br>";

while($registro=mysqli_fetch_row($resultado)){
    echo "<br>";
    foreach($registro as $valor){
        echo "<td class='campo'>".$valor." | ";
    }
}

echo "<hr>";
echo "<h3>Ejercicio U</h3>";

$sentencia = "INSERT INTO articulos VALUES (11,'Altavoces',12,2)";
$resultado = mysqli_query($conexion, $sentencia);

echo "<br>";
echo "Registro insertado correctamente";

echo "<hr>";
echo "<h3>Ejercicio V</h3>";

$sentencia = "UPDATE articulos SET Nombre='Impresora Laser' WHERE Clave_articulo=6";
$resultado = mysqli_query($conexion, $sentencia);

echo "<br>";
echo "Registro actualizado correctamente";

echo "<hr>";
echo "<h3>Ejercicio W</h3>";

$sentencia = "UPDATE articulos SET Precio = Precio * 0.9";
$resultado = mysqli_query($conexion, $sentencia);

echo "<br>";
echo "Descuento del 10% aplicado";

echo "<hr>";
echo "<h3>Ejercicio X</h3>";

$sentencia = "UPDATE articulos SET Precio = Precio - 1 WHERE Precio>=30";
$resultado = mysqli_query($conexion, $sentencia);

echo "<br>";
echo "Descuento de 1€ aplicado";

echo "<hr>";
echo "<h3>Ejercicio Y</h3>";

$sentencia = "DELETE FROM articulos WHERE Clave_articulo=6";
$resultado = mysqli_query($conexion, $sentencia);

echo "<br>";
echo "Registro eliminado correctamente";
?>
