<?php
$n = 7;

if ($n >= 0 && $n <= 10) {
    for ($i = 0; $i <= 10; $i++) {
        echo "$n x $i = " . ($n * $i) . "\n";
    }
} else {
    echo "El número debe estar entre 0 y 10";
}
?>
