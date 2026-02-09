<?php
include '../funciones.php';
$datos = obtenerTasas('USD');
$tasas = array_slice($datos['rates'], 0, 5);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>

<h2>Comparador</h2>

<?php foreach ($tasas as $m => $v): ?>
    <p><?= $m ?></p>
    <div class="barra" style="width:<?= $v * 10 ?>px"></div>
<?php endforeach; ?>

<a href="../index.php">Volver</a>
</body>
</html>
