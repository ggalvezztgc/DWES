<?php
include 'actividad55.php';
 
$alumnos["Javier"] = 9.5;
 
foreach ($alumnos as $nombre => $nota) {
    echo "Alumno: $nombre - Nota: $nota\n";
}
?>
 