<?php
$numeros = [5, -3, 8, -1, 0, 7]; 

foreach ($numeros as $num) {
    if ($num == 0) {
        break; 
    } elseif ($num > 0) {
        echo $num . " es positivo<br>";
    } else {
        echo $num . " es negativo<br>";
    }
}
?>
