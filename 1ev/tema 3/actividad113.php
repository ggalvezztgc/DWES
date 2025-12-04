<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fecha = $_POST["fecha"];
    $timestamp = strtotime($fecha);

    $pago30 = date("Y-m-d", strtotime("+30 days", $timestamp));
    $pago60 = date("Y-m-d", strtotime("+60 days", $timestamp));
    $pago90 = date("Y-m-d", strtotime("+90 days", $timestamp));

    echo "Fecha inicial: $fecha<br>";
    echo "Pago a 30 días: $pago30<br>";
    echo "Pago a 60 días: $pago60<br>";
    echo "Pago a 90 días: $pago90<br>";
} else {
?>
<form method="post">
    Fecha: <input type="date" name="fecha"><br><br>
    <input type="submit" value="Calcular pagos">
</form>
<?php
}
?>
