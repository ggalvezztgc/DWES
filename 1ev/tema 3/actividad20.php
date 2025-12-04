<?php
$facturas = [
    ["codigo" => 1, "litros" => 50, "precio" => 12],
    ["codigo" => 2, "litros" => 30, "precio" => 20],
    ["codigo" => 1, "litros" => 40, "precio" => 12],
    ["codigo" => 3, "litros" => 25, "precio" => 30],
    ["codigo" => 2, "litros" => 50, "precio" => 15]
];

$facturacionTotal = 0;
$litrosArticulo1 = 0;
$facturasMayor600 = 0;

foreach ($facturas as $factura) {
    $totalFactura = $factura["litros"] * $factura["precio"];
    $facturacionTotal += $totalFactura;
    if ($factura["codigo"] == 1) $litrosArticulo1 += $factura["litros"];
    if ($totalFactura > 600) $facturasMayor600++;
}

echo "Facturación total: $facturacionTotal €\n";
echo "Litros vendidos del artículo 1: $litrosArticulo1\n";
echo "Facturas superiores a 600 €: $facturasMayor600\n";
?>
