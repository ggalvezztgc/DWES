<?php
$vendedores = [
    "Luis" => 12000,
    "Ana" => 15000,
    "Ángel" => 23000,
    "Rosa" => 26000
];

foreach ($vendedores as $nombre => $ventas) {
    $x = str_repeat("X", $ventas / 1000);
    echo $nombre . ": " . $x . "\n";
}
?>
