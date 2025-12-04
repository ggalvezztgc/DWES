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

array_unshift($poblaciones, "Ciudad Real");

echo "Listado de poblaciones:\n";
foreach ($poblaciones as $poblacion) {
    echo $poblacion . "\n";
}
?>
