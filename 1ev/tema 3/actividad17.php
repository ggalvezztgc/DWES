<?php
$empleados = [
    ["nombre" => "Ana", "sueldo" => 1200],
    ["nombre" => "Luis", "sueldo" => 900],
    ["nombre" => "Marta", "sueldo" => 1500],
    ["nombre" => "Juan", "sueldo" => 800],
    ["nombre" => "Lucía", "sueldo" => 1100]
];

$sumaSueldos = 0;
$mayores1000 = [];

foreach ($empleados as $empleado) {
    $sumaSueldos += $empleado["sueldo"];
    if ($empleado["sueldo"] > 1000) {
        $mayores1000[] = $empleado["nombre"];
    }
}

echo "Suma de sueldos: $sumaSueldos\n";
echo "Cantidad de sueldos mayores a 1000€: " . count($mayores1000) . "\n";
echo "Nombres: " . implode(", ", $mayores1000) . "\n";
?>
