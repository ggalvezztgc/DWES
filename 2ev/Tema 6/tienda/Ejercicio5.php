<?php
// Cabeceras para generar el Excel
header('Content-type: application/vnd.ms-excel');
header('Content-Disposition: attachment; filename=peliculas.xls');
header('Pragma: no-cache');
header('Expires: 0');
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>

<table border="1">
<tr>
    <th>Código</th>
    <th>Título</th>
    <th>Tema</th>
    <th>Duración</th>
    <th>Precio</th>
    <th>Calificación</th>
</tr>

<tr>
    <td>100</td>
    <td>Casper</td>
    <td>Aventuras</td>
    <td>124</td>
    <td>2,50</td>
    <td>Todos los Públicos</td>
</tr>

<tr>
    <td>115</td>
    <td>El libro de la Selva</td>
    <td>Aventuras</td>
    <td>132</td>
    <td>2,75</td>
    <td>Todos los Públicos</td>
</tr>

<tr>
    <td>123</td>
    <td>Batman Forever</td>
    <td>Acción</td>
    <td>98</td>
    <td>3,25</td>
    <td>Mayores de 7 años</td>
</tr>

</table>

</body>
</html>
