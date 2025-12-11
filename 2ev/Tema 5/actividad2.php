<?php
if (isset($_POST['web'])) {
    $web = $_POST['web'];

    if (isset($_POST['recordar'])) {
        setcookie("web", $web, time() + 3600);
    } else {

        setcookie("web", "", time() - 3600);
    }
    header("Location: ej2.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>Ejercicio 2</title></head>
<body>
<h3>Introduce una dirección web</h3>

<form method="POST" action="">
    Dirección web:
    <input type="text" name="web" value="<?php echo isset($_COOKIE['web']) ? htmlspecialchars($_COOKIE['web']) : '';?>"><br>
    <label>
        <input type="checkbox" name="recordar" <?php echo isset($_COOKIE['web']) ? 'checked' : ''; ?>>
        Recordar dirección
    </label><br>
    <input type="submit" value="Enviar">
</form>

<hr>
<?php
if (isset($_COOKIE['web'])) {
    echo "Dirección recordada: " . htmlspecialchars($_COOKIE['web']);
} else {
    echo "No hay ninguna dirección recordada.";
}
?>
</body>
</html>
