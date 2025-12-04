<?php
$cadena = "Agencia de Seguridad Nacional para la Defensa";

$posSeguridad = strpos($cadena, "Seguridad");
echo "Posición de 'Seguridad': " . $posSeguridad . "\n";

$ultimaA = strrpos($cadena, "a");
echo "Última posición de 'a': " . $ultimaA . "\n";
?>
