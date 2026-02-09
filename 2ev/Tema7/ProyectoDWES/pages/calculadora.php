    <?php
include '../funciones.php';
$datos = obtenerTasas('USD');
$tasas = $datos['rates'];
$resultado = '';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>

<h2>Calculadora</h2>

<form method="post">
    <input type="number" name="cantidad" step="0.01" required>

    <select name="origen">
        <?php foreach ($tasas as $m => $v) echo "<option>$m</option>"; ?>
    </select>

    <select name="destino">
        <?php foreach ($tasas as $m => $v) echo "<option>$m</option>"; ?>
    </select>

    <button>Convertir</button>
</form>

<?php
if ($_POST) {
    $cantidad = $_POST['cantidad'];
    $origen = $_POST['origen'];
    $destino = $_POST['destino'];

    if ($cantidad > 0) {
        $resultado = ($tasas[$destino] / $tasas[$origen]) * $cantidad;
        echo "<p>Resultado: " . number_format($resultado, 4) . "</p>";
    }
}
?>

<a href="../index.php">Volver</a>
</body>
</html>
