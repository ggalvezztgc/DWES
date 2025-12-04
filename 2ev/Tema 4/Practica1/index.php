<?php
require_once("clase_chalet.php");
require_once("clase_vivienda.php");

$inmuebles = array(
    new Vivienda("V-101", "C/ Mayor 12", "Valencia", 85, 3, 2, 1, 160000, "fotos/v101.jpg", "3º", "S", "S"),
    new Vivienda("V-102", "Av. Mar 7", "Gandía", 60, 2, 1, 0, 110000, "fotos/v102.jpg", "1º", "N", "S"),
    new Chalet("C-201", "Urb. Pinos 4", "Bétera", 140, 4, 2, 2, 320000, "fotos/c201.jpg", 500, "S", "N"),
    new Chalet("C-202", "C/ Monte 9", "Chiva", 120, 3, 2, 1, 250000, "fotos/c202.jpg", 350, "S", "S")
);

for ($i = 0; $i < count($inmuebles); $i++) {
    echo "<h2>Inmueble " . ($i + 1) . "</h2>";
    $inmuebles[$i]->mostrarInmueble();

    $precioFinal = $inmuebles[$i]->calculaIVA();
    echo "Precio final (IVA 10%): " . number_format($precioFinal, 2, ",", ".") . " €<br>";

    $comision = $inmuebles[$i]->calculaComision();
    echo "Comisión inmobiliaria: " . number_format($comision, 2, ",", ".") . " €<br>";

    echo "<hr>";
}
?>
