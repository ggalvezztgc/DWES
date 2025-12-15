<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 8 - Alta de Socios</title>
</head>
<body>

<h2>Alta de socio del gimnasio</h2>

<form method="POST" enctype="multipart/form-data">
    Foto del socio (JPG o PNG, máx. 1MB):<br>
    <input type="file" name="foto" required><br><br>
    <input type="submit" name="enviar" value="Dar de alta">
</form>

<?php
if (isset($_POST['enviar'])) {

    $tipo = $_FILES["foto"]["type"];
    $size = $_FILES["foto"]["size"];

    if ($_FILES["foto"]["error"] != 0) {
        echo "<p>Error al subir el archivo.</p>";
    }
    elseif (
        ($tipo == "image/jpeg" || $tipo == "image/png") &&
        $size <= 1000000
    ) {

        if (!file_exists("socios")) {
            mkdir("socios");
        }

        move_uploaded_file(
            $_FILES["foto"]["tmp_name"],
            "socios/" . $_FILES["foto"]["name"]
        );

        echo "<p>Foto del socio subida correctamente.</p>";

    } else {
        echo "<p>Archivo no permitido. Solo JPG o PNG y máximo 1MB.</p>";
    }
}
?>

</body>
</html>
