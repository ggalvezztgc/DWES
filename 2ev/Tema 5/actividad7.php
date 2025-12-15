<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 7 - Venta de Inmuebles</title>
</head>
<body>

<h2>Alta de inmueble</h2>

<form method="POST" enctype="multipart/form-data">
    Foto del inmueble (JPG, máx. 1MB):<br>
    <input type="file" name="foto" required><br><br>
    <input type="submit" name="enviar" value="Subir inmueble">
</form>

<?php
if (isset($_POST['enviar'])) {

    if ($_FILES["foto"]["error"] != 0) {
        echo "<p>Error al subir el archivo.</p>";
    } 
    elseif ($_FILES["foto"]["type"] == "image/jpeg" &&
            $_FILES["foto"]["size"] <= 1000000) {

        if (!file_exists("inmuebles")) {
            mkdir("inmuebles");
        }

        move_uploaded_file(
            $_FILES["foto"]["tmp_name"],
            "inmuebles/" . $_FILES["foto"]["name"]
        );

        echo "<p>Foto del inmueble subida correctamente.</p>";

    } else {
        echo "<p>Archivo no permitido. Solo JPG y máximo 1MB.</p>";
    }
}
?>

</body>
</html>
