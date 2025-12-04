<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inmuebles MVC</title>
</head>
<body>

<h1>Listado de inmuebles</h1>

<?php
for ($i=0; $i<count($inmuebles); $i++) {

    $precio = $inmuebles[$i]["precio"];
    $precioFinal = $precio * 1.10;

   
    if ($inmuebles[$i]["tipo"] == "Vivienda") {
        $comision = $precio * 0.05;
    } else {
        $comision = $precio * 0.10;
        if ($inmuebles[$i]["piscina"] == "S") $comision = $comision + 1000;
        if ($inmuebles[$i]["paellero"] == "S") $comision = $comision + 500;
    }

    echo "<hr>";
    echo "<h2>Inmueble ".($i+1)."</h2>";

    echo "Código: ".$inmuebles[$i]["codigo"]."<br>";
    echo "Tipo: ".$inmuebles[$i]["tipo"]."<br>";
    echo "Dirección: ".$inmuebles[$i]["direccion"]."<br>";
    echo "Población: ".$inmuebles[$i]["poblacion"]."<br>";
    echo "Metros: ".$inmuebles[$i]["metros"]." m2<br>";
    echo "Habitaciones: ".$inmuebles[$i]["habitaciones"]."<br>";
    echo "Baños: ".$inmuebles[$i]["banos"]."<br>";
    echo "Garaje: ".$inmuebles[$i]["garaje"]."<br>";
    echo "Precio base: ".number_format($precio,2,",",".")." €<br>";

    echo "Foto:<br>";
    echo "<img src='".$inmuebles[$i]["foto"]."' width='250' alt='Foto'><br>";

    if ($inmuebles[$i]["tipo"] == "Vivienda") {
        echo "Altura: ".$inmuebles[$i]["altura"]."<br>";
        echo "Balcón: ".$inmuebles[$i]["balcon"]."<br>";
        echo "Exterior: ".$inmuebles[$i]["exterior"]."<br>";
    } else {
        echo "Parcela: ".$inmuebles[$i]["parcela"]." m2<br>";
        echo "Piscina: ".$inmuebles[$i]["piscina"]."<br>";
        echo "Paellero: ".$inmuebles[$i]["paellero"]."<br>";
    }

    echo "Precio final (IVA 10%): ".number_format($precioFinal,2,",",".")." €<br>";
    echo "Comisión: ".number_format($comision,2,",",".")." €<br>";
}
?>

</body>
</html>
