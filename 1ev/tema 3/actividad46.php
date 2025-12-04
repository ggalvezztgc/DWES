<?php
$base = 25;
$iva_tipo = "reducido";
$promo = "mitad";

switch ($iva_tipo) {
    case "general":
        $iva = 0.21;
        break;
    case "reducido":
        $iva = 0.10;
        break;
    case "superreducido":
        $iva = 0.04;
        break;
    default:
        $iva = 0;
}

switch ($promo) {
    case "mitad":
        $descuento = $base / 2;
        break;
    case "meno5":
        $descuento = 5;
        break;
    case "5porc":
        $descuento = $base * 0.05;
        break;
    case "nopro":
    default:
        $descuento = 0;
}

$base_con_descuento = $base - $descuento;
$importe_iva = $base_con_descuento * $iva;
$total = $base_con_descuento + $importe_iva;

echo "Base imponible $base<br>";
echo "Cód. promo. ($promo): -$descuento<br>";
echo "IVA (" . ($iva*100) . "%) $importe_iva<br>";
echo "Precio con IVA $total<br>";
echo "TOTAL $total";
?>
