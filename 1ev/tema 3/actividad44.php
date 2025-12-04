<?php
$numero = 20;
$contador = 0;
$suma = 0;

for ($i = 1; $i <= $numero; $i++) {
    if ($i % 3 == 0) {
        echo "$i<br>";
        $contador++;
        $suma += $i;
    }
}

echo "Cantidad de múltiplos de 3: $contador<br>";
echo "Suma de los múltiplos de 3: $suma";
?>
