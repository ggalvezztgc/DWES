<?php
$codigo = 1;
$nombre = "pakuzo";
$apellidos = "trafalgar";
$puesto = "Vendedor";
$sueldo = 75000;
$edad = 26;
$num_hijos = 0;
$sucursal = "CaixaBank";

if ($puesto == "Vendedor" && $sueldo > 70000) {
    $retencion1 = $sueldo * 0.10;
} else {
    $retencion1 = $sueldo * 0.20;
}

if ($edad >= 50 || $num_hijos > 2) {
    $retencion2 = $sueldo * 0.05;
} else {
    $retencion2 = $sueldo * 0.10;
}

if ($sueldo > 50000 && $sueldo < 80000) {
    $retencion3 = $sueldo * 0.05;
} else {
    $retencion3 = $sueldo * 0.12;
}

if ($num_hijos == 1 || $num_hijos == 2) {
    $retencion4 = $sueldo * 0.10;
} else {
    $retencion4 = $sueldo * 0.05;
}

if ($sueldo > 80000 || $num_hijos == 0) {
    $retencion5 = $sueldo * 0.15;
} else {
    $retencion5 = $sueldo * 0.05;
}

echo "Empleado: $nombre $apellidos<br>";
echo "Sueldo: $sueldo €<br>";
echo "Retención 1: " . round($retencion1, 2) . " €<br>";
echo "Retención 2: " . round($retencion2, 2) . " €<br>";
echo "Retención 3: " . round($retencion3, 2) . " €<br>";
echo "Retención 4: " . round($retencion4, 2) . " €<br>";
echo "Retención 5: " . round($retencion5, 2) . " €<br>";
?>
