<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $f1 = $_POST["fecha1"];
    $f2 = $_POST["fecha2"];
    $f3 = $_POST["fecha3"];

    $fechas = [$f1, $f2, $f3];
    sort($fechas);

    echo "La fecha menor es: " . $fechas[0] . "<br>";
    echo "La fecha mayor es: " . $fechas[2];
} else {
?>
<form method="post">
    Fecha 1: <input type="date" name="fecha1"><br>
    Fecha 2: <input type="date" name="fecha2"><br>
    Fecha 3: <input type="date" name="fecha3"><br><br>
    <input type="submit" value="Comparar fechas">
</form>
<?php
}
?>
