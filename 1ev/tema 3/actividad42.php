<?php
$num1 = 10;
$num2 = 50;

if ($num1 != $num2) {
    $min = min($num1, $num2);
    $max = max($num1, $num2);

    for ($i = $min; $i <= $max; $i += 7) {
        echo $i . "<br>";
    }
} else {
    echo "Los números deben ser distintos";
}
?>
