<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Listado de alumnos aptos</title>
</head>
<body>

<h1>Listado de alumnos Aptos</h1>

<table border="1" cellpadding="5" cellspacing="0">
    <tr style="background:#b33; color:white;">
        <th>Código</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Dirección</th>
        <th>Población</th>
        <th>Código postal</th>
        <th>Teléfono</th>
        <th>Email</th>
        <th>Calificación</th>
    </tr>

    <?php foreach ($alumnos as $alumno): ?>
        <?php if ($alumno["calificacion"] !== "Apto") continue; ?>
        <tr>
            <td><?= $alumno["codigo"] ?></td>
            <td><?= $alumno["nombre"] ?></td>
            <td><?= $alumno["apellidos"] ?></td>
            <td><?= $alumno["direccion"] ?></td>
            <td><?= $alumno["poblacion"] ?></td>
            <td><?= $alumno["codpostal"] ?></td>
            <td><?= $alumno["telefono"] ?></td>
            <td><?= $alumno["email"] ?></td>
            <td><?= $alumno["calificacion"] ?></td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
