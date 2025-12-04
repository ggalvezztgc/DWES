<?php
$notas = [6, 7, 5, 4, 8];
$haySuspenso = false;
foreach ($notas as $nota) if ($nota < 5) { $haySuspenso = true; break; }
echo $haySuspenso ? "Hay algún suspenso\n" : "No hay suspensos\n";
?>
