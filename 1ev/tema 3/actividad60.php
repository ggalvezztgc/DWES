<?php
$alumnos = [
    ["nombre" => "Ana", "nota" => 7],
    ["nombre" => "Luis", "nota" => 4],
    ["nombre" => "Marta", "nota" => 9],
    ["nombre" => "Pedro", "nota" => 6]
];

usort($alumnos, function($a, $b) {
    return $b["nota"] <=> $a["nota"];
});

foreach ($alumnos as $a) {
    echo $a["nombre"] . " - " . $a["nota"] . "<br>";
}
?>
