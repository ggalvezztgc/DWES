<?php
if (isset($_POST['tipo'])) {
    setcookie("tipo_noticia", $_POST['tipo'], time() + 3600);
    header("Location: ej3.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>Ejercicio 3</title></head>
<body>
<h2>Periódico</h2>

<?php
if (!isset($_COOKIE['tipo_noticia'])) {
    echo "<h3>Noticias políticas</h3>";
    echo "<p>Titular político...</p>";
    echo "<h3>Noticias económicas</h3>";
    echo "<p>Titular económico...</p>";
    echo "<h3>Noticias deportivas</h3>";
    echo "<p>Titular deportivo...</p>";
} else {
    switch ($_COOKIE['tipo_noticia']) {
        case 'politica':
            echo "<h3>Noticia política</h3><p>Titular político...</p>";
            break;
        case 'economia':
            echo "<h3>Noticia económica</h3><p>Titular económico...</p>";
            break;
        case 'deportes':
            echo "<h3>Noticia deportiva</h3><p>Titular deportivo...</p>";
            break;
    }
}
?>

<hr>
<form method="POST" action="">
    <label>Tipo de titular a mostrar: </label>
    <select name="tipo">
        <option value="politica">Política</option>
        <option value="economia">Economía</option>
        <option value="deportes">Deportes</option>
    </select>
    <input type="submit" value="Guardar preferencia">
</form>
</body>
</html>
