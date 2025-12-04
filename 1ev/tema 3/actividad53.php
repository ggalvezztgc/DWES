 <?php
include 'actividad47.php';
$nuevos_hoteles = [
    [
        "Nombre" => "Meliá)",
        "Cat" => "4*",
        "Hab" => 204,
        "Población" => "46100 Valencia",
        "Dirección" => "Empalme, 5"
    ],
    [
        "Nombre" => "Balneario Las Arenas",
        "Cat" => "Lujo",
        "Hab" => 253,
        "Población" => "46011 Valencia",
        "Dirección" => "Eugenia Viñes, 22-24"
    ]
];
 
foreach ($nuevos_hoteles as $nuevo) {
    $hoteles[] = $nuevo;
}
 
echo "Listado actualizado de hoteles: <br>";
foreach ($hoteles as $hotel) {
    echo "Nombre: " . $hotel["Nombre"] . "<br>";
    echo "Categoría: " . $hotel["Cat"] . "<br>";
    echo "Habitaciones: " . $hotel["Hab"] . "<br>";
    echo "Población: " . $hotel["Población"] . "<br>";
    echo "Dirección: " . $hotel["Dirección"] . "<br><br>";
}
 
?>