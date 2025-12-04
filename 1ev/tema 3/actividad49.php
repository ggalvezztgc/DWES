<?php
$hoteles = [
    ["nombre" => "Hotel A", "habitaciones" => 120, "estrellas" => 4],
    ["nombre" => "Hotel B", "habitaciones" => 80, "estrellas" => 3],
    ["nombre" => "Hotel C", "habitaciones" => 150, "estrellas" => 5]
];

echo "Hoteles con más de 100 habitaciones:<br>";
foreach ($hoteles as $h) {
    if ($h["habitaciones"] > 100) {
        echo $h["nombre"] . "<br>";
    }
}
echo "<br>";
?>
