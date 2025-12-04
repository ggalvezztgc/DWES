<?php
$mensaje = "Hola mundo";

if (isset($mensaje)) {
    echo "La variable mensaje tiene valor: $mensaje<br>";
} else {
    echo "La variable mensaje no tiene valor<br>";
}

unset($mensaje);

if (isset($mensaje)) {
    echo "La variable mensaje tiene valor<br>";
} else {
    echo "La variable mensaje ya no tiene valor<br>";
}
?>
