<?php
include '../funciones.php';
$datos = obtenerTasas('USD');
$tasas = $datos['rates'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>

<h2>Tasas de cambio (USD)</h2>

<table>
<tr>
    <th>Moneda</th>
    <th>Valor</th>
</tr>

<?php
$cont = 0;
foreach ($tasas as $moneda => $valor) {
    if ($cont == 10) break;
    echo "<tr><td>$moneda</td><td>" . number_format($valor, 4) . "</td></tr>";
    $cont++;
}
?>

</table>

<a href="../index.php">Volver</a>
</body>
</html>
