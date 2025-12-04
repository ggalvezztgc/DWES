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

$posicion = array_search("Teruel", $poblaciones);
$subarray = array_slice($poblaciones, $posicion);

echo "Subarray desde Teruel:\n";
foreach ($subarray as $poblacion) {
    echo $poblacion . "\n";
}
?>
