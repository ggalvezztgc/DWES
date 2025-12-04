<?php
$numeros = [5, -3, 8, 2, 0, 7, -1, 9, 4, 6];
$hayNegativo = false;
foreach ($numeros as $num) if ($num < 0) { $hayNegativo = true; break; }
echo $hayNegativo ? "Se ha introducido algún número negativo\n" : "No hay números negativos\n";
?>
