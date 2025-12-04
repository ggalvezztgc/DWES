<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fecha_nacimiento = $_POST["fecha"];

    if ($fecha_nacimiento) {
        $nacimiento = new DateTime($fecha_nacimiento);
        $hoy = new DateTime();
        $edad = $hoy->diff($nacimiento)->y;

        echo "El empleado tiene $edad años.";
    } else {
        echo "Introduce una fecha válida.";
    }
}
?>

<form method="post">
    Fecha de nacimiento: <input type="date" name="fecha" required>
    <input type="submit" value="Calcular edad">
</form>
