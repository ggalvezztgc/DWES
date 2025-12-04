<?php
$alumnos = [
    ["nombre" => "Ana", "nota" => 7],
    ["nombre" => "Luis", "nota" => 4],
    ["nombre" => "Marta", "nota" => 9],
    ["nombre" => "Pedro", "nota" => 6]
];

usort($alumnos, function($a, $b) {
    return strcmp($b["nombre"], $a["nombre"]);
});

foreach ($alumnos as $a) {
    echo $a["nombre"] . " - " . $a["nota"] . "<br>";
}
?>
