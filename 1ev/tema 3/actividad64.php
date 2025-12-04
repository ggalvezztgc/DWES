<?php
$empleados = [
    ["nombre" => "Ana", "nota" => 8],
    ["nombre" => "Luis", "nota" => 6],
    ["nombre" => "Marta", "nota" => 9],
    ["nombre" => "Pedro", "nota" => 7],
    ["nombre" => "Lucía", "nota" => 10]
];

$posicion = 3;
$posicion -= 1;

echo "Empleado actual: " . $empleados[$posicion]["nombre"] . " - Nota: " . $empleados[$posicion]["nota"];
?>
