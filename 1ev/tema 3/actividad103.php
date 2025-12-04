<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $sueldo = $_POST["sueldo"];
    $edad = $_POST["edad"];
    $poblacion = $_POST["poblacion"];

    if ($edad > 30 && $sueldo > 25000) {
        $retencion = $sueldo * 0.20;
    } else {
        $retencion = $sueldo * 0.10;
    }

    if ($poblacion != "Valencia") {
        $sueldo += 2000;
    }

    $sueldoFinal = $sueldo - $retencion;

    echo "Empleado: $nombre $apellidos<br>";
    echo "Edad: $edad<br>";
    echo "Población: $poblacion<br>";
    echo "Sueldo bruto (con plus si aplica): $sueldo €<br>";
    echo "Retención: $retencion €<br>";
    echo "Sueldo final: $sueldoFinal €";
} else {
?>
<form method="post">
    Nombre: <input type="text" name="nombre"><br>
    Apellidos: <input type="text" name="apellidos"><br>
    Sueldo (€): <input type="number" name="sueldo" step="0.01"><br>
    Edad: <input type="number" name="edad"><br>
    Población:
    <select name="poblacion">
        <option value="Valencia">Valencia</option>
        <option value="Castellón">Castellón</option>
        <option value="Alicante">Alicante</option>
    </select><br>
    <input type="submit" value="Calcular">
</form>
<?php
}
?>
