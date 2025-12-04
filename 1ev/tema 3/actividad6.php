<?php
$numeros = [2, 5, 3, -1, 7]; 

foreach ($numeros as $num) {
    if ($num < 0) {
        break; 
    }
    echo $num . "^2 = " . ($num * $num) . "<br>";
}
?>
