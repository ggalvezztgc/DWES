<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Práctica Tema 3 - Programación basada en Lenguaje de Marcas con código embebido</title>

<style>
body{
    font-family: Arial, sans-serif;
    margin: 40px;
    background-color: #ffffff;
    color: #000000;
}
h2{
    color:#b30000;
    margin-bottom:5px;
}
h3{
    color:#000000;
    font-weight:bold;
    margin-top:35px;
    margin-bottom:10px;
}
table{
    border-collapse: collapse;
    width:100%;
    max-width:900px;
    margin-bottom:25px;
    background-color:white;
}
th{
    background:#b30000;
    color:#000000;
    padding:6px 6px;
    border:1px solid #b30000;
    text-align:center;
    vertical-align:middle;
}
td{
    background:white;
    color:#000000;
    padding:6px 6px;
    border:1px solid #b30000;
    text-align:center;
}
</style>
</head>
<body>

<?php
$alumnos = [
    ["codigo"=>1005,"nombre"=>"Luis","apellidos"=>"Sánchez Ros","direccion"=>"Calle Olta, 23","poblacion"=>"Valencia","codpostal"=>46004,"telefono"=>"653 852 125","email"=>"luis@gmail.com","calificacion"=>"Apto"],
    ["codigo"=>1015,"nombre"=>"Marta","apellidos"=>"Ramos Solis","direccion"=>"Calle Sorní, 42","poblacion"=>"Valencia","codpostal"=>46026,"telefono"=>"621 589 336","email"=>"marta@gmail.com","calificacion"=>"No apto"],
    ["codigo"=>1203,"nombre"=>"Sara","apellidos"=>"Más Martí","direccion"=>"Calle Romeral, 9","poblacion"=>"Madrid","codpostal"=>28080,"telefono"=>"647 522 001","email"=>"sara@gmail.com","calificacion"=>"Apto"],
    ["codigo"=>1486,"nombre"=>"Angel","apellidos"=>"Ríos Moltó","direccion"=>"Calle de Sastre, 10","poblacion"=>"Madrid","codpostal"=>28012,"telefono"=>"698 411 223","email"=>"angel@gmail.com","calificacion"=>"No Apto"]
];

function tabla($lista){
    echo "<table>";
    echo "<tr>
    <th>codigo</th><th>nombre</th><th>apellidos</th>
    <th>direccion</th><th>poblacion</th><th>codpostal</th>
    <th>telefono</th><th>email</th><th>calificacion</th>
    </tr>";
    foreach($lista as $a){
        echo "<tr>
        <td>{$a['codigo']}</td>
        <td>{$a['nombre']}</td>
        <td>{$a['apellidos']}</td>
        <td>{$a['direccion']}</td>
        <td>{$a['poblacion']}</td>
        <td>{$a['codpostal']}</td>
        <td>{$a['telefono']}</td>
        <td>{$a['email']}</td>
        <td>{$a['calificacion']}</td>
        </tr>";
    }
    echo "</table>";
}

echo "<h3>Listado 1 - Alumnos de Valencia</h3>";
tabla(array_filter($alumnos, fn($a)=>$a["poblacion"]=="Valencia"));

echo "<h3>Listado 2 - Alumnos No Aptos</h3>";
tabla(array_filter($alumnos, fn($a)=>strtolower($a["calificacion"])=="no apto" || strtolower($a["calificacion"])=="no apto "));

echo "<h3>Listado 3 - Alumnos Aptos de Madrid</h3>";
tabla(array_filter($alumnos, fn($a)=>$a["poblacion"]=="Madrid" && strtolower($a["calificacion"])=="apto"));

echo "<h3>Listado 4 - Alumnos con código mayor de 1300</h3>";
tabla(array_filter($alumnos, fn($a)=>$a["codigo"]>1300));

echo "<h3>Listado 5 - Alumnos de Valencia o Aptos</h3>";
tabla(array_filter($alumnos, fn($a)=>$a["poblacion"]=="Valencia" || strtolower($a["calificacion"])=="apto"));
?>

</body>
</html>
