<?php
$horas = 45;
$salario = ($horas <= 40) ? $horas * 12 : 40 * 12 + ($horas - 40) * 16;
echo "Salario semanal: $salario euros\n";
?>
