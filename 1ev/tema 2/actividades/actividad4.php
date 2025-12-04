<?php
$vehiculo = [
    "marca" => "Nissan",
    "modelo" => "Skyline r-34",
    "fecha" => "1999-2002",
    "cilindrada" => "6 cilindros en línea, biturbo",
    "motor" => "2.6L",
    "potencia" => "280-330 CV"
];

foreach($vehiculo as $indice => $valor){
    echo $indice . ": " . $valor . "<br>";
}
?>
