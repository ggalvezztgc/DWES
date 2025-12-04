<?php
$notas = [7, 4, 5, 8, 3, 6];
$aprobados = 0;
$suspensos = 0;

foreach ($notas as $nota) {
    if ($nota >= 5) {
        $aprobados++;
    } else {
        $suspensos++;
    }
}

echo "Cantidad de alumnos aprobados: $aprobados\n";
echo "Cantidad de alumnos suspensos: $suspensos\n";
?>
