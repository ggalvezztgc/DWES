<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Actividad 2 - Gestión de Ficheros</title>
</head>
<body>

<h2>Actividad 2 - Gestión de Ficheros</h2>

<hr>
<h3>Ejercicio 1</h3>

<form method="post">
Nombre de fichero o directorio:
<input type="text" name="f1">
<input type="submit" value="Comprobar">
</form>

<?php
if(isset($_POST["f1"])){
    $f = $_POST["f1"];
    if(file_exists($f)){
        if(is_file($f)) echo "Es un fichero<br>";
        if(is_dir($f)) echo "Es un directorio<br>";
        echo "Última modificación: ".date("d/m/Y H:i:s", filemtime($f))."<br>";
        echo "Tamaño: ".number_format(filesize($f),0,"",".")." bytes<br>";
    }else{
        echo "No existe<br>";
    }
}
?>

<hr>
<h3>Ejercicio 2</h3>

<form method="post">
Origen: <input type="text" name="origen2">
Destino: <input type="text" name="destino2">
<input type="submit" value="Copiar">
</form>

<?php
if(isset($_POST["origen2"])){
    if(file_exists($_POST["origen2"])){
        copy($_POST["origen2"], $_POST["destino2"]);
        echo "Fichero copiado<br>";
    }else{
        echo "El fichero no existe<br>";
    }
}
?>

<hr>
<h3>Ejercicio 3</h3>

<form method="post">
Origen: <input type="text" name="origen3">
Nuevo nombre: <input type="text" name="destino3">
<input type="submit" value="Renombrar">
</form>

<?php
if(isset($_POST["origen3"])){
    if(file_exists($_POST["origen3"])){
        rename($_POST["origen3"], $_POST["destino3"]);
        echo "Fichero renombrado<br>";
    }else{
        echo "No existe<br>";
    }
}
?>

<hr>
<h3>Ejercicio 4</h3>

<form method="post">
Fichero: <input type="text" name="f4">
<input type="submit" value="Borrar">
</form>

<?php
if(isset($_POST["f4"])){
    if(file_exists($_POST["f4"])){
        unlink($_POST["f4"]);
        echo "Fichero borrado<br>";
    }else{
        echo "No existe<br>";
    }
}
?>

<hr>
<h3>Ejercicio 5</h3>

<form method="post">
Directorio: <input type="text" name="dir5">
<input type="submit" value="Cambiar">
</form>

<?php
if(isset($_POST["dir5"])){
    echo "Directorio actual: ".getcwd()."<br>";
    if(is_dir($_POST["dir5"])){
        chdir($_POST["dir5"]);
        echo "Nuevo directorio: ".getcwd()."<br>";
    }else{
        echo "No es un directorio<br>";
    }
}
?>

<hr>
<h3>Ejercicio 6</h3>

<form method="post">
Directorio: <input type="text" name="dir6">
<input type="submit" value="Mostrar contenido">
</form>

<?php
if(isset($_POST["dir6"])){
    if(is_dir($_POST["dir6"])){
        $d = opendir($_POST["dir6"]);
        while($f = readdir($d)){
            echo $f."<br>";
        }
        closedir($d);
    }else{
        echo "No es un directorio<br>";
    }
}
?>

<hr>
<h3>Ejercicio 7</h3>

<form method="post">
Directorio: <input type="text" name="dir7">
<input type="submit" value="Crear">
</form>

<?php
if(isset($_POST["dir7"])){
    if(!is_dir($_POST["dir7"])){
        mkdir($_POST["dir7"]);
        echo "Directorio creado<br>";
    }else{
        echo "Ya existe<br>";
    }
}
?>

<hr>
<h3>Ejercicio 8</h3>

<form method="post">
Directorio: <input type="text" name="dir8">
<input type="submit" value="Eliminar">
</form>

<?php
if(isset($_POST["dir8"])){
    if(is_dir($_POST["dir8"])){
        rmdir($_POST["dir8"]);
        echo "Directorio eliminado<br>";
    }else{
        echo "No existe<br>";
    }
}
?>

<hr>
<h3>Ejercicio 9</h3>

<form method="post">
Directorio: <input type="text" name="dir9">
<input type="submit" value="Espacio libre">
</form>

<?php
if(isset($_POST["dir9"])){
    echo number_format(disk_free_space($_POST["dir9"]),0,"",".")." bytes<br>";
}
?>

<hr>
<h3>Ejercicio 10</h3>

<form method="post">
Fichero: <input type="text" name="f10">
<input type="submit" value="Tipo de archivo">
</form>

<?php
if(isset($_POST["f10"])){
    if(file_exists($_POST["f10"])){
        echo mime_content_type($_POST["f10"])."<br>";
    }else{
        echo "No existe<br>";
    }
}
?>

<hr>
<h3>Ejercicio 11</h3>

<form method="post">
Fichero: <input type="text" name="f11">
<input type="submit" value="Extensión">
</form>

<?php
if(isset($_POST["f11"])){
    echo pathinfo($_POST["f11"], PATHINFO_EXTENSION)."<br>";
}
?>

<hr>
<h3>Ejercicio 12</h3>

<?php
$total = disk_total_space("/");
$libre = disk_free_space("/");
$ocupado = ($total - $libre) / 1024 / 1024;
echo "Espacio ocupado: ".number_format($ocupado,2,",",".")." MB<br>";
?>

<hr>
<h3>Ejercicio 13</h3>

<form method="post">
Fichero: <input type="text" name="f13">
<input type="submit" value="Permisos">
</form>

<?php
if(isset($_POST["f13"])){
    $f = $_POST["f13"];
    echo "Lectura: ".is_readable($f)."<br>";
    echo "Escritura: ".is_writable($f)."<br>";
    echo "Ejecución: ".is_executable($f)."<br>";
}
?>

<hr>
<h3>Ejercicio 14</h3>

<form method="post">
Nombre fichero: <input type="text" name="f14"><br>
Texto:<br>
<textarea name="texto14"></textarea><br>
<input type="submit" value="Crear fichero">
</form>

<?php
if(isset($_POST["f14"])){
    $f = fopen($_POST["f14"], "w");
    fwrite($f, $_POST["texto14"]);
    fclose($f);
    echo "Fichero creado<br>";
}
?>

<hr>
<h3>Ejercicio 15</h3>

<form method="post">
Fichero: <input type="text" name="f15">
<input type="submit" value="Mostrar contenido">
</form>

<?php
if(isset($_POST["f15"])){
    if(file_exists($_POST["f15"])){
        echo nl2br(file_get_contents($_POST["f15"]));
    }else{
        echo "No existe<br>";
    }
}
?>

<hr>
<h3>Ejercicio 16</h3>

<form method="post">
Fichero: <input type="text" name="f16"><br>
Posición: <input type="text" name="pos16"><br>
Caracteres: <input type="text" name="num16"><br>
<input type="submit" value="Leer">
</form>

<?php
if(isset($_POST["f16"])){
    $h = fopen($_POST["f16"], "r");
    fseek($h, $_POST["pos16"]);
    echo fread($h, $_POST["num16"]);
    fclose($h);
}
?>

<hr>
<h3>Ejercicio 17</h3>

<form method="post">
Fichero: <input type="text" name="f17">
Permisos (ej: 0777): <input type="text" name="perm17">
<input type="submit" value="Cambiar permisos">
</form>

<?php
if(isset($_POST["f17"])){
    chmod($_POST["f17"], octdec($_POST["perm17"]));
    echo "Permisos cambiados<br>";
}
?>

<hr>
<h3>Ejercicio 18</h3>

<form method="post">
Fichero: <input type="text" name="f18">
<input type="submit" value="Ver permisos">
</form>

<?php
if(isset($_POST["f18"])){
    echo substr(sprintf("%o", fileperms($_POST["f18"])), -4)."<br>";
}
?>

<hr>
<h3>Ejercicio 19</h3>

<form method="post">
Fichero: <input type="text" name="f19">
<input type="submit" value="Primera y última letra">
</form>

<?php
if(isset($_POST["f19"])){
    $c = file_get_contents($_POST["f19"]);
    echo "Primera letra: ".$c[0]."<br>";
    echo "Última letra: ".$c[strlen($c)-1]."<br>";
}
?>

<hr>
<h3>Ejercicio 20</h3>

<form method="post">
Directorio: <input type="text" name="dir20">
<input type="submit" value="Mostrar TXT">
</form>

<?php
if(isset($_POST["dir20"])){
    $lista = glob($_POST["dir20"]."/*.txt");
    foreach($lista as $f){
        echo $f."<br>";
    }
}
?>

</body>
</html>
