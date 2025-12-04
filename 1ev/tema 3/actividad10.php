<?php
$numeros = [3, 5, 8, -2, 7]; 
$suma = 0;
foreach ($numeros as $num) {
    if ($num < 0) {
        break;
    }
    $suma += $num;
}

echo "hay una suma total de: " . $suma . " números antes de encontrar un negativo.";
?>