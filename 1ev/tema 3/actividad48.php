<?php
$hoteles = [
    ["nombre" => "Hotel A", "habitaciones" => 120, "estrellas" => 4],
    ["nombre" => "Hotel B", "habitaciones" => 80, "estrellas" => 3]
];

echo "Listado de hoteles:<br>";
foreach ($hoteles as $h) {
    echo $h["nombre"] . "<br>";
}
echo "<br>";
?>
