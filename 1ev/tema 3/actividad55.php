<?php
$notas_alumno = [
    ["Indice" =>"Pakuzo", "Valor" => 4.5 . "<br>"],
    ["Indice" =>"Paco", "Valor" => 7.3 . "<br>"],
    ["Indice" =>"Rosa", "Valor" => 8.5 . "<br>"],
    ["Indice" =>"Maria", "Valor" => 3.1 . "<br>"],
    ["Indice" =>"Alejandro", "Valor" => 1.5 . "<br>"],
    ["Indice" =>"Cesar", "Valor" => 6.5 . "<br>"],
    ["Indice" =>"Marcos", "Valor" => 9.1 . "<br>"],
    ["Indice" =>"Victor", "Valor" => 3.5 . "<br>"]
];
foreach ($notas_alumno as $alumno){
    echo "Alumno: " . $alumno['Indice'] . " - Nota: " . $alumno['Valor'] . "\n";
}
 
?>