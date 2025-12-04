<?php
$puestos = [
    "Administrativo",
    "Informático",
    "Comercial",
    "Mozo Almacén",
    "Comercial",
    "Informático",
    "Administrativo",
    "Administrativo",
    "Gerente",
    "Director",
    "Administrativo",
    "Comercial",
    "Mozo Almacén",
    "Comercial",
    "Informático",
    "Administrativo",
    "Administrativo"
];

$conteo = array_count_values($puestos);

echo "Número de empleados por puesto:\n";
foreach ($conteo as $puesto => $cantidad) {
    echo $puesto . ": " . $cantidad . "\n";
}
?>
