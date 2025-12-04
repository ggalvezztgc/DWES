<?php
$cadena = "Agencia de Seguridad Nacional para la Defensa";

$posNacional = strpos($cadena, "Nacional");
if ($posNacional !== false) {
    echo substr($cadena, $posNacional) . "\n";
}

$posS = strpos($cadena, "S");
if ($posS !== false) {
    echo substr($cadena, $posS) . "\n";
}
?>
