<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Actividad 3 - XML</title>
</head>
<body>

<h2>Actividad 3 - Acceso a datos en formato XML</h2>

<?php
$xml = simplexml_load_file("coches.xml");

echo "<table border='1'>";
echo "<tr>";
echo "<th>Matricula</th>";
echo "<th>Marca</th>";
echo "<th>Modelo</th>";
echo "<th>Precio</th>";
echo "</tr>";

foreach($xml->coche as $c){
    echo "<tr>";
    echo "<td>".$c->matricula."</td>";
    echo "<td>".$c->marca."</td>";
    echo "<td>".$c->modelo."</td>";
    echo "<td>".$c->precio."</td>";
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>
