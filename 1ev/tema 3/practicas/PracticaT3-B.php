<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Formulario Cines</title>

<style>
body{
    font-family: Arial, sans-serif;
}

.contenedor{
    width:600px;
    margin:20px auto;
    border:2px solid #000;
    padding:20px;
}

h2{
    text-align:center;
    text-decoration:underline;
}

label{
    display:block;
    margin-top:10px;
}

.tablaResultado{
    width:100%;
    border-collapse:collapse;
    margin-bottom:40px;
}

.tablaResultado th{
    background: #224d8aff;        
    color:white;
    padding:8px;
    border:4px solid #66b3ff; 
    text-align:center;
}

.tablaResultado td{
    background:#87a7d6;      
    padding:8px;
    border:4px solid #66b3ff;   
    text-align:center;
    color:black;
}

</style>

</head>
<body>

<?php if(!isset($_POST["enviar"])) { ?>

<div class="contenedor">
<h2>Formulario Cines</h2>

<form method="post">

<label>Nombre y Apellidos</label>
<input type="text" name="nombre">

<label>DNI</label>
<input type="text" name="dni">

<label>Película</label>
<select name="pelicula" size="5" style="width:100%;">
    <option>Palacios Stream</option>
    <option>Regreso al futuro</option>
    <option>Culpa nuestra</option>
    <option>Tron: Ares</option>
    <option>Predator: BADLANDS</option>
</select>

<label>Fecha</label>
<input type="date" name="fecha">

<label>Entradas</label>
<input type="number" name="entradas">

<label>Nº Tarjeta</label>
<input type="text" name="numTarjeta">

<label>Tipo Tarjeta</label>
<input type="radio" name="tipoTarjeta" value="4B"> 4B<br>
<input type="radio" name="tipoTarjeta" value="American Express"> American Express<br>
<input type="radio" name="tipoTarjeta" value="Servired"> Servired<br>
<input type="radio" name="tipoTarjeta" value="Red 6000"> Red 6000<br><br>

<label>Teléfono</label>
<input type="text" name="telefono">

<label>Correo</label>
<input type="email" name="correo">

<br>
<input type="checkbox" name="info" value="Sí">
Desea recibir información de las salas semanalmente
<br><br>

<input type="submit" name="enviar" value="Enviar">

</form>
</div>

<?php } else { ?>

<?php
$info = isset($_POST["info"]) ? "Sí" : "No";
?>

<div class="contenedor">
<h2>Resultado</h2>

<table class="tablaResultado">
<tr><th>Nombre y Apellidos</th><th>DNI</th></tr>
<tr><td><?= $_POST["nombre"] ?></td><td><?= $_POST["dni"] ?></td></tr>
</table>

<table class="tablaResultado">
<tr><th>Película</th><th>Entradas</th><th>Fecha</th></tr>
<tr><td><?= $_POST["pelicula"] ?></td><td><?= $_POST["entradas"] ?></td><td><?= $_POST["fecha"] ?></td></tr>
</table>

<table class="tablaResultado">
<tr><th>Nº Tarjeta</th><th>Tipo Tarjeta</th></tr>
<tr><td><?= $_POST["numTarjeta"] ?></td><td><?= $_POST["tipoTarjeta"] ?></td></tr>
</table>

<table class="tablaResultado">
<tr><th>Teléfono</th><th>Correo</th><th>Recibir Info</th></tr>
<tr><td><?= $_POST["telefono"] ?></td><td><?= $_POST["correo"] ?></td><td><?= $info ?></td></tr>
</table>

</div>

<?php } ?>

</body>
</html>
