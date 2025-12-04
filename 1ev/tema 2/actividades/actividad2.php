<?php

echo "<h2>Información del servidor y página</h2>";

echo "Nombre del Servidor: " . $_SERVER['SERVER_NAME'] . "<br>";

echo "Nombre del puerto: " . $_SERVER ['SERVER_PORT'] . "<br>";

echo "Nombre del software: " . $_SERVER ['SERVER_SOFTWARE'] . "<br>";

echo "Nombre del directorio: " . $_SERVER ['DOCUMENT_ROOT'] . "<br>";

echo "Página desde la que se enlazó: " . $_SERVER['HTTP_REFERER'] . "<br>";
?>