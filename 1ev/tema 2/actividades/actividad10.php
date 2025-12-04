<?php
$precio_producto = 37;
$unidades = 14;

define("IVA", 0.21);

$importe_base = $precio_producto * $unidades;

$importe_iva = $importe_base * IVA;

$importe_final = $importe_base + $importe_iva;

echo "Precio del producto: " . $precio_producto . " €<br>";
echo "Unidades adquiridas: " . $unidades . "<br>";
echo "Importe base: " . $importe_base . " €<br>";
echo "IVA (21%): " . round($importe_iva, 2) . " €<br>";
echo "Importe final: " . round($importe_final, 2) . " €<br>";
?>
