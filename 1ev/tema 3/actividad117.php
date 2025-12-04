<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fecha_caducidad = $_POST["fecha"];
    $hoy = date("Y-m-d");

    if ($fecha_caducidad < $hoy) {
        echo "El producto está caducado.";
    } elseif ($fecha_caducidad == $hoy) {
        echo "El producto caduca hoy.";
    } else {
        echo "El producto no está caducado.";
    }
}
?>

<form method="post">
    <?php
    $anio_actual = date("Y");
    $min = "$anio_actual-01-01";
    $max = "$anio_actual-12-31";
    $hoy = date("Y-m-d");
    ?>
    Fecha de caducidad:
    <input type="date" name="fecha" value="<?= $hoy ?>" min="<?= $min ?>" max="<?= $max ?>" required>
    <input type="submit" value="Comprobar">
</form>
