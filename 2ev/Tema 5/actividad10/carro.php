<?php
session_start();

$productos = [
    100 => ["Teclado", 10],
    210 => ["Ratón", 8],
    300 => ["Monitor", 120],
    400 => ["USB 32GB", 15],
    500 => ["Auriculares", 25],
];
?>
<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>carro.php</title></head>
<body>
<h2>Carro de la Compra</h2>

<?php
if (empty($_SESSION['compra'])) {
    echo "<p>No hay productos en el carro.</p>";
    echo "<p><a href='compra.php'>Volver a la tienda</a></p>";
    exit;
}

$total = 0;

echo "<table border='1' cellpadding='5'>";
echo "<tr><th>Artículo</th><th>Unidades</th><th>Precio unit.</th><th>Importe</th></tr>";

foreach ($_SESSION['compra'] as $item) {
    $codigo = $item[0];
    $unidades = $item[1];

    if (!isset($productos[$codigo])) continue;

    $nombre = $productos[$codigo][0];
    $precioUnit = $productos[$codigo][1];
    $importe = $precioUnit * $unidades;

    $total += $importe;

    echo "<tr>";
    echo "<td>$nombre</td>";
    echo "<td>$unidades</td>";
    echo "<td>$precioUnit €</td>";
    echo "<td>$importe €</td>";
    echo "</tr>";
}
echo "</table>";

echo "<h3>Importe Final: $total €</h3>";
?>
<p><a href="compra.php">Seguir comprando</a></p>
</body>
</html>
