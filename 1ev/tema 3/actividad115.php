<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dia = $_POST["dia"];
    $mes = $_POST["mes"];
    $anio = $_POST["anio"];
    $hora = $_POST["hora"];
    $minuto = $_POST["minuto"];
    $segundo = $_POST["segundo"];

    if (checkdate($mes, $dia, $anio)) {
        $fecha_introducida = mktime($hora, $minuto, $segundo, $mes, $dia, $anio);
        $fecha_actual = time();

        if (date("Y-m-d H:i:s", $fecha_introducida) == date("Y-m-d H:i:s", $fecha_actual)) {
            echo "La fecha introducida es la actual.";
        } elseif ($fecha_introducida < $fecha_actual) {
            echo "La fecha introducida es pasada.";
        } else {
            echo "La fecha introducida es futura.";
        }
    } else {
        echo "La fecha introducida no es válida.";
    }
}
?>

<form method="post">
    Día: <input type="number" name="dia" min="1" max="31" required><br>
    Mes: <input type="number" name="mes" min="1" max="12" required><br>
    Año: <input type="number" name="anio" min="1" required><br>
    Hora: <input type="number" name="hora" min="0" max="23" required><br>
    Minutos: <input type="number" name="minuto" min="0" max="59" required><br>
    Segundos: <input type="number" name="segundo" min="0" max="59" required><br>
    <input type="submit" value="Comprobar">
</form>
