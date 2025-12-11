<?php
session_start();
if (!isset($_SESSION['compra'])) {
    $_SESSION['compra'] = array();
}

$productos = [
    100 => ["Teclado", 10],
    210 => ["Ratón", 8],
    300 => ["Monitor", 120],
    400 => ["USB 32GB", 15],
    500 => ["Auriculares", 25],
];

if (isset($_POST['codigo']) && isset($_POST['uds'])) {
    $codigo = (int)$_POST['codigo'];
    $uds    = max(1, (int)$_POST['uds']);
    $_SESSION['compra'][] = [$codigo, $uds];
    header("Location: compra.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>compra.php</title></head>
<body>
<h2>Listado de artículos</h2>
<table border="1" cellpadding="5">
<tr><th>Código</th><th>Artículo</th><th>Precio</th><th>Comprar</th></tr>
<?php
foreach($productos as $codigo => $datos){
    echo "<tr>";
    echo "<td>$codigo</td>";
    echo "<td>{$datos[0]}</td>";
    echo "<td>{$datos[1]} €</td>";
    echo "<td>
            <form method='POST' action=''>
                <input type='hidden' name='codigo' value='$codigo'>
                Unidades: <input type='number' name='uds' value='1' min='1'>
                <input type='submit' value='Añadir al carro'>
            </form>
          </td>";
    echo "</tr>";
}
?>
</table>

<p><a href="carro.php">Realizar compra</a></p>
</body>
</html>
