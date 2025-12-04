<?php
$alumnos = ["Juan", "Rosa", "María", "Emmanuel", "Ana"];

$existeRosa = in_array("Rosa", $alumnos);
$existeManuel = in_array("Manuel", $alumnos);

if ($existeRosa) {
    echo "El alumno Rosa existe.<br>";
} else {
    echo "El alumno Rosa no existe.<br>";
}

if ($existeManuel) {
    echo "El alumno Manuel existe.<br>";
} else {
    echo "El alumno Manuel no existe.<br>";
}
?>
