<?php
$n = 17;
$esPrimo = true;

if ($n <= 1) {
    $esPrimo = false;
} else {
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            $esPrimo = false;
            break;
        }
    }
}

if ($esPrimo) {
    echo "$n es primo";
} else {
    echo "$n no es primo";
}
?>
