<?php
function valoresImpares($array) {
    $resultado = [];
    for ($i = 1; $i < count($array); $i += 2) {
        $resultado[] = $array[$i];
    }
    return $resultado;
}

$numeros = [10, 20, 30, 40, 50, 60];
print_r(valoresImpares($numeros));
?>
