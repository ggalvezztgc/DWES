<?php
$numeros = [4, 7, 10, 3, 0, 6]; 

foreach ($numeros as $num) {
    if ($num == 0) {
        break; 
    } elseif ($num % 2 == 0) {
        echo $num . " es par<br>";
    } else {
        echo $num . " es impar<br>";
    }
}
?>
