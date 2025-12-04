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

if (in_array("Burgos", $poblaciones)) {
    echo "Burgos existe en el array.";
} else {
    echo "Burgos no existe en el array.";
}
?>
