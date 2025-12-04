<?php
function departamentosPorCategoria($categoria) {
    $departamentos = [
        "Categoría 1" => ["Gerente", "Dirección"],
        "Categoría 2" => ["Informático", "Ingeniero", "Técnico"],
        "Categoría 3" => ["Administración", "Ventas", "Almacén"],
        "Categoría 4" => ["Peón", "Ayudante"]
    ];

    return isset($departamentos[$categoria]) ? $departamentos[$categoria] : [];
}

$resultado = departamentosPorCategoria("Categoría 3");

print_r($resultado);
?>
