<?php
$poblaciones = [
    "Valencia",
    "Castellón",
    "Alicante",
    "Murcia",
    "Albacete",
    "Teruel",
    "Madrid",
    "Barcelona"
];

$posicion = array_search("Alicante", $poblaciones);
array_splice($poblaciones, $posicion + 1, 0, ["Málaga", "Sevilla", "Almería"]);

echo "Listado de poblaciones:\n";
foreach ($poblaciones as $poblacion) {
    echo $poblacion . "\n";
}
?>
