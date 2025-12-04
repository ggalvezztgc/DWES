<?php
$alumnos = [
    ["edad" => 17, "altura" => 1.68],
    ["edad" => 19, "altura" => 1.80],
    ["edad" => 18, "altura" => 1.74],
    ["edad" => 20, "altura" => 1.76],
    ["edad" => 16, "altura" => 1.70]
];

$sumaEdades = 0;
$sumaAlturas = 0;
$mayores18 = 0;
$altos175 = 0;

foreach ($alumnos as $alumno) {
    $sumaEdades += $alumno["edad"];
    $sumaAlturas += $alumno["altura"];
    if ($alumno["edad"] > 18) $mayores18++;
    if ($alumno["altura"] > 1.75) $altos175++;
}

$edadMedia = $sumaEdades / count($alumnos);
$alturaMedia = $sumaAlturas / count($alumnos);

echo "Edad media: $edadMedia\n";
echo "Altura media: $alturaMedia\n";
echo "Cantidad de alumnos mayores de 18 años: $mayores18\n";
echo "Cantidad de alumnos con altura > 1.75: $altos175\n";
?>
