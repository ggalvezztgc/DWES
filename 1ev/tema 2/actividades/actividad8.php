<?php
define("Euro", 166.386);

$sueldo_pesetas = 50000;

$sueldo_euros = $sueldo_pesetas / Euro;

$gasto_euros = 300;

$gasto_pesetas = $gasto_euros * Euro;

echo "Sueldo en pesetas: $sueldo_pesetas pts<br>";
echo "Sueldo en euros: " . round($sueldo_euros, 2) . " €<br>";
echo "Gasto en euros: $gasto_euros €<br>";
echo "Gasto en pesetas: " . round($gasto_pesetas, 2) . " pts<br>";
?>
