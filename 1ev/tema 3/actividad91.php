<?php
$cadena = "Agencia de Seguridad Nacional para la Defensa";

$pos = strpos($cadena, "Nacional");
if ($pos !== false) {
    echo substr($cadena, $pos, 17);
}
?>
