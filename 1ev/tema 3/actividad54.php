<?php
$hoteles = [
    ["nombre" => "Hotel A", "habitaciones" => 120, "estrellas" => 4],
    ["nombre" => "Hotel B", "habitaciones" => 80, "estrellas" => 3],
    ["nombre" => "Hotel C", "habitaciones" => 150, "estrellas" => 5],
    ["nombre" => "Meliá", "habitaciones" => 204, "estrellas" => 4],
    ["nombre" => "Balneario Las Arenas", "habitaciones" => 253, "estrellas" => 5]
];

$habitaciones = array_column($hoteles, "habitaciones");
array_multisort($habitaciones, SORT_ASC, $hoteles);

echo "Hoteles ordenados por número de habitaciones:<br>";
foreach ($hoteles as $h) {
    echo $h["nombre"] . " - " . $h["habitaciones"] . " habitaciones<br>";
}
?>
