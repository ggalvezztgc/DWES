<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 9 - Alta empleo</title>
</head>
<body>

<h2>Alta en portal de empleo</h2>

<form method="POST" enctype="multipart/form-data">
    Curriculum Vitae (PDF, máx. 5MB):<br>
    <input type="file" name="cv" required><br><br>
    <input type="submit" name="enviar" value="Subir CV">
</form>

<?php
if (isset($_POST['enviar'])) {

    if ($_FILES["cv"]["error"] != 0) {
        echo "<p>Error al subir el archivo.</p>";
    }
    elseif ($_FILES["cv"]["type"] == "application/pdf" &&
            $_FILES["cv"]["size"] <= 5000000) {

        if (!file_exists("cvs")) {
            mkdir("cvs");
        }

        move_uploaded_file(
            $_FILES["cv"]["tmp_name"],
            "cvs/" . $_FILES["cv"]["name"]
        );

        echo "<p>Curriculum subido correctamente.</p>";

    } else {
        echo "<p>Archivo no permitido. Solo PDF y máximo 5MB.</p>";
    }
}
?>

</body>
</html>
