<?php
$cadena = "     Agencia de Seguridad Nacional para la Defensa     ";

$sinDelante = ltrim($cadena);
$sinDetras = rtrim($cadena);
$sinAmbos = trim($cadena);

echo "Sin espacios delante: '$sinDelante' (Longitud: " . strlen($sinDelante) . ")\n";
echo "Sin espacios detrás: '$sinDetras' (Longitud: " . strlen($sinDetras) . ")\n";
echo "Sin espacios a ambos lados: '$sinAmbos' (Longitud: " . strlen($sinAmbos) . ")\n";
?>
