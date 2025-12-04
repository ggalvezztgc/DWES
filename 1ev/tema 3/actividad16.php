<?php
$numeros = [5, -3, 0, 7, -1, 0, 8, -6, 2, 0];
$sumaPositivos = 0;
$contPositivos = 0;
$sumaNegativos = 0;
$contNegativos = 0;
$contCeros = 0;
foreach ($numeros as $num) {
    if ($num > 0) {
        $sumaPositivos += $num;
        $contPositivos++;
    } elseif ($num < 0) {
        $sumaNegativos += $num;
        $contNegativos++;
    } else {
        $contCeros++;
    }
}
$mediaPositivos = $contPositivos ? $sumaPositivos / $contPositivos : 0;
$mediaNegativos = $contNegativos ? $sumaNegativos / $contNegativos : 0;
echo "Media de números positivos: $mediaPositivos\n";
echo "Media de números negativos: $mediaNegativos\n";
echo "Cantidad de ceros: $contCeros\n";
?>
