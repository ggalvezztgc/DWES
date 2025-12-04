<?php
function carnets(...$carnets) {
    echo "Número de carnets: " . count($carnets) . "\n";
    echo "Listado de carnets:\n";
    foreach ($carnets as $carnet) {
        echo "- " . $carnet . "\n";
    }

    if (isset($carnets[1])) {
        echo "Carnet en posición 2: " . $carnets[1] . "\n";
    } else {
        echo "No hay carnet en posición 2.\n";
    }

    if (isset($carnets[4])) {
        echo "Carnet en posición 5: " . $carnets[4] . "\n";
    } else {
        echo "No hay carnet en posición 5.\n";
    }
}

carnets("B", "A1", "AM", "C", "D");
?>
