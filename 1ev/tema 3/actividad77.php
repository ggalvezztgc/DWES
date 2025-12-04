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

if (in_array("Alicante", $poblaciones)) {
    echo "Alicante existe en el array.";
} else {
    echo "Alicante no existe en el array.";
}
?>
