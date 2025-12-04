<?php
function valorAnterior($array, $valor) {
    $pos = array_search($valor, $array);
    if ($pos === false || $pos == 0) {
        return false;
    }
    return $array[$pos - 1];
}

$valores = [10, 20, 30, 40, 50];
echo valorAnterior($valores, 30);
?>
