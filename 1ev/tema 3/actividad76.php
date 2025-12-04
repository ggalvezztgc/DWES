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

$poblacionesInverso = array_reverse($poblaciones);

echo "Array de poblaciones en orden inverso:\n";
foreach ($poblacionesInverso as $poblacion) {
    echo $poblacion . "\n";
}
?>
