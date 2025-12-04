<?php
$notas = [6, 8, 5];
$media = array_sum($notas)/count($notas);
if($media<5)$boletin="Insuficiente";
elseif($media<6)$boletin="Suficiente";
elseif($media<7)$boletin="Bien";
elseif($media<9)$boletin="Notable";
else $boletin="Sobresaliente";
echo "Media: $media, Boletín: $boletin\n";
?>
