<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dia = $_POST["dia"];
    $mes = $_POST["mes"];
    $anio = $_POST["anio"];

    if (checkdate($mes, $dia, $anio)) {
        echo "La fecha $dia/$mes/$anio es correcta.";
    } else {
        echo "La fecha $dia/$mes/$anio no es válida.";
    }
} else {
?>
<form method="post">
    Día: <input type="number" name="dia" min="1" max="31"><br>
    Mes: <input type="number" name="mes" min="1" max="12"><br>
    Año: <input type="number" name="anio" min="1"><br><br>
    <input type="submit" value="Verificar">
</form>
<?php
}
?>
