<?php
$numeros = [3, 5, 8, -2, 7]; 
$suma = 0;
$contador = 0;


foreach ($numeros as $num) {
    if ($num < 0) {
        break;
    }
    $suma += $num;
    $contador++;
}

$media = $suma / $contador;

echo "hay una media total de: " . $media . " números antes de encontrar un negativo.";
?>