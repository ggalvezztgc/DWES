<?php
$contador = 0;
$numeros = [3, 5, 8, -2, 7]; 

foreach ($numeros as $num) {
    if ($num < 0) {
        break;
    }
    $contador++;
}

echo "Se han introducido " . $contador . " números antes de encontrar un negativo.";
?>
