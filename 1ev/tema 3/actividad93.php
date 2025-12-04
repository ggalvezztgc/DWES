<?php
$cadena = "Fecha: 23-12-2012 Hora: 19,45,00";
$cadena = str_replace(["-", ","], ["/", ":"], $cadena);
echo $cadena;
?>
