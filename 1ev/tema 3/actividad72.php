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

$poblaciones = array_diff($poblaciones, ["Murcia", "Albacete"]);
$poblaciones = array_values($poblaciones);

echo "Listado de poblaciones:\n";
foreach ($poblaciones as $poblacion) {
    echo $poblacion . "\n";
}
?>
