<?php
function impFinal($precio, $unidades, $iva = 21, $dto = 0) {
    $subtotal = $precio * $unidades;
    $descuento = $subtotal * ($dto / 100);
    $subtotal -= $descuento;
    $total = $subtotal * (1 + $iva / 100);
    return $total;
}

echo "Importe final: " . impFinal(50, 3);
?>
