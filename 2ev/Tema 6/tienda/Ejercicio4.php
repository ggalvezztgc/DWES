<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Actividad 4 - CSV</title>
</head>
<body>

<h2>Actividad 4 - Acceso a datos en formato CSV</h2>

<h3>Introducir vuelo</h3>

<form method="post">
Origen: <input type="text" name="origen"><br>
Destino: <input type="text" name="destino"><br>
Precio: <input type="text" name="precio"><br>
<input type="submit" value="Guardar">
</form>

<?php
// Guardar datos en el CSV
if(isset($_POST["origen"])){
    $f = fopen("vuelos.csv", "a");
    fputcsv($f, array($_POST["origen"], $_POST["destino"], $_POST["precio"]), ";");
    fclose($f);
    echo "<br>Vuelo guardado correctamente<br>";
}

// Mostrar contenido del CSV
if(file_exists("vuelos.csv")){
    echo "<h3>Listado de vuelos</h3>";
    $f = fopen("vuelos.csv", "r");

    echo "<table border='1'>";
    echo "<tr><th>Origen</th><th>Destino</th><th>Precio</th></tr>";

    while($fila = fgetcsv($f, 0, ";")){
        echo "<tr>";
        echo "<td>".$fila[0]."</td>";
        echo "<td>".$fila[1]."</td>";
        echo "<td>".$fila[2]."</td>";
        echo "</tr>";
    }

    echo "</table>";
    fclose($f);
}
?>

</body>
</html>
