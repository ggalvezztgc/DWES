<?php
$variable = 3.14;

if (is_int($variable)) {
    echo "La variable es de tipo entero";
} elseif (is_float($variable)) {
    echo "La variable es de tipo flotante (decimal)";
} elseif (is_string($variable)) {
    echo "La variable es de tipo texto";
} else {
    echo "La variable es de otro tipo";
}
?>
