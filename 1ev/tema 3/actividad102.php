<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $sueldo = $_POST["sueldo"];
    $edad = $_POST["edad"];

    if ($edad > 30 && $sueldo > 25000) {
        $retencion = $sueldo * 0.20;
    } else {
        $retencion = $sueldo * 0.10;
    }

    $sueldoFinal = $sueldo - $retencion;

    echo "Empleado: $nombre $apellidos<br>";
    echo "Edad: $edad<br>";
    echo "Sueldo bruto: $sueldo €<br>";
    echo "Retención: $retencion €<br>";
    echo "Sueldo final: $sueldoFinal €";
} else {
?>
<form method="post">
    Nombre: <input type="text" name="nombre"><br>
    Apellidos: <input type="text" name="apellidos"><br>
    Sueldo (€): <input type="number" name="sueldo" step="0.01"><br>
    Edad: <input type="number" name="edad"><br>
    <input type="submit" value="Calcular">
</form>
<?php
}
?>
