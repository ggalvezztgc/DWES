<?php
$n = 5;
$suma = 0;

if ($n > 0) {
    for ($i = $n + 1; $i <= $n + 100; $i++) {
        $suma += $i;
    }
    echo "La suma de los 100 números siguientes a $n es $suma";
} else {
    echo "El número debe ser positivo";
}
?>
