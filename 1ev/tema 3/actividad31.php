<?php
$notas = 0;
$media = ($notas[0] + $notas[1]) / 2;

if ($media >= 5) {
    echo "El alumno está aprobado. La media es: " . $media;
} else {
    echo "El alumno está suspenso. La media es: " . $media;
}
?>
