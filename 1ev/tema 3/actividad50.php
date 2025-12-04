<?php
$hoteles = [
    ["nombre" => "Hotel A", "habitaciones" => 120, "estrellas" => 4],
    ["nombre" => "Hotel B", "habitaciones" => 80, "estrellas" => 3],
    ["nombre" => "Hotel C", "habitaciones" => 90, "estrellas" => 3]
];

echo "Hoteles con menos de 100 habitaciones y 3 estrellas:<br>";
foreach ($hoteles as $h) {
    if ($h["habitaciones"] < 100 && $h["estrellas"] == 3) {
        echo $h["nombre"] . "<br>";
    }
}
echo "<br>";
?>
