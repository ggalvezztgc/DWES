<?php
$administracion = ["Luis", "Ana", "Ángel", "María"];
$informatica = ["Pedro", "Rosa", "Roberto"];

$empleados = array_merge($administracion, $informatica);

echo "Listado de empleados:\n";
foreach ($empleados as $empleado) {
    echo $empleado . "\n";
}
?>
