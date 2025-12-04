<?php
$peliculas = [
    [
        "codigo" => 100,"titulo" => "Casper","tema" => "Aventuras","duracion" => 124,"precio" => 2.50,"estreno" => true,"cmoral" => "Todos los Públicos"
    ],

    [
        "codigo" => 115,"titulo" => "El libro de la Selva","tema" => "Aventuras","duracion" => 132,"precio" => 2.75,"estreno" => true,"cmoral" => "Todos los Públicos"
    ],

    [
        "codigo" => 123,"titulo" => "Batman Forever","tema" => "Acción","duracion" => 98,"precio" => 3.25,"estreno" => false,"cmoral" => "Mayores de 7 años"
    ]
];

$codigo_consulta = 100;

$pelicula_encontrada = null;
foreach ($peliculas as $pelicula) {
    if ($pelicula["codigo"] == $codigo_consulta) {
        $pelicula_encontrada = $pelicula;
        break;
    }
}

if ($pelicula_encontrada) {
    echo "<table border='1' cellpadding='5'>";
    echo "<tr><th>Código</th><td>" . $pelicula_encontrada["codigo"] . "</td></tr>";
    echo "<tr><th>Título</th><td>" . $pelicula_encontrada["titulo"] . "</td></tr>";
    echo "<tr><th>Tema</th><td>" . $pelicula_encontrada["tema"] . "</td></tr>";
    echo "<tr><th>Duración</th><td>" . $pelicula_encontrada["duracion"] . "</td></tr>";
    echo "<tr><th>Precio</th><td>" . number_format($pelicula_encontrada["precio"], 2) . "</td></tr>";
    echo "<tr><th>Estreno</th><td>" . ($pelicula_encontrada["estreno"] ? "Sí" : "No") . "</td></tr>";
    echo "<tr><th>Calificación Moral</th><td>" . $pelicula_encontrada["cmoral"] . "</td></tr>";
    echo "</table>";
} else {
    echo "Película no encontrada.";
}
?>
