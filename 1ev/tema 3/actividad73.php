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

$inicio = array_search("Madrid", $poblaciones);
array_splice($poblaciones, $inicio, 2, ["Cáceres", "Cádiz", "Badajoz"]);

echo "Listado de poblaciones:\n";
foreach ($poblaciones as $poblacion) {
    echo $poblacion . "\n";
}
?>
