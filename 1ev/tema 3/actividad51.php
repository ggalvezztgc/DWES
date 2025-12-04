<?php
$hoteles = [
    ["nombre" => "Hotel A", "habitaciones" => 120, "estrellas" => 4],
    ["nombre" => "Acta del Carmen", "habitaciones" => 150, "estrellas" => 5],
    ["nombre" => "Hotel C", "habitaciones" => 90, "estrellas" => 3]
];

foreach ($hoteles as $key => $h) {
    if ($h["nombre"] == "Acta del Carmen") {
        unset($hoteles[$key]);
    }
}

echo "Listado después de borrar 'Acta del Carmen':<br>";
foreach ($hoteles as $h) {
    echo $h["nombre"] . "<br>";
}
echo "<br>";
?>
