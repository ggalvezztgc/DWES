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

array_push($poblaciones, "Zaragoza");

echo "Listado de poblaciones:\n";
foreach ($poblaciones as $poblacion) {
    echo $poblacion . "\n";
}
?>
