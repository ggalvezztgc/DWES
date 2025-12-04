<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fecha1 = $_POST["fecha1"];
    $fecha2 = $_POST["fecha2"];

    $f1 = strtotime($fecha1);
    $f2 = strtotime($fecha2);

    $diferencia = abs($f2 - $f1);
    $dias = $diferencia / (60 * 60 * 24);

    echo "Días transcurridos entre $fecha1 y $fecha2: $dias días.";
} else {
?>
<form method="post">
    Fecha 1: <input type="date" name="fecha1"><br>
    Fecha 2: <input type="date" name="fecha2"><br><br>
    <input type="submit" value="Calcular diferencia">
</form>
<?php
}
?>
