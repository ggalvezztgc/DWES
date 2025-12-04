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

$posicion = array_search("Valencia", $poblaciones);
$subarray = array_slice($poblaciones, $posicion + 1, 2);

echo "Subarray con las 2 siguientes poblaciones a Valencia:\n";
foreach ($subarray as $poblacion) {
    echo $poblacion . "\n";
}
?>
