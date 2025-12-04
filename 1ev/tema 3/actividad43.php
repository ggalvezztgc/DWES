<?php
$numeros = [4, 7, 9, 12, 15, 20, -3];
$cantidad = 0;
$sumaImpares = 0;
$contImpares = 0;
$mayorPar = null;

foreach ($numeros as $n) {
    if ($n < 0) {
        break;
    }
    $cantidad++;

    if ($n % 2 == 0) {
        if ($mayorPar === null || $n > $mayorPar) {
            $mayorPar = $n;
        }
    } else {
        $sumaImpares += $n;
        $contImpares++;
    }
}

$mediaImpares = $contImpares > 0 ? $sumaImpares / $contImpares : 0;

echo "Cantidad de números: $cantidad<br>";
echo "Media de impares: $mediaImpares<br>";
echo "Mayor de los pares: $mayorPar<br>";
?>
