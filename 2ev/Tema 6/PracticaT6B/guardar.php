<?php
$id = $_POST['id'];

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$fecha = $_POST['fecha'];
$telefono = $_POST['telefono'];
$sexo = $_POST['sexo'];
$email = $_POST['email'];
$poblacion = $_POST['poblacion'];
$pais = $_POST['pais'];
$usuario = $_POST['usuario'];
$password = $_POST['password'];

// Crear carpeta si no existe
if (!is_dir("registro")) {
    mkdir("registro");
}
if (!is_dir("registro/fotos")) {
    mkdir("registro/fotos");
}

// Guardar fichero de texto
$fichero = fopen("registro/usuario_$id.txt", "w");

fwrite($fichero, "Id: $id\n");
fwrite($fichero, "Nombre: $nombre\n");
fwrite($fichero, "Apellidos: $apellidos\n");
fwrite($fichero, "Fecha: $fecha\n");
fwrite($fichero, "Telefono: $telefono\n");
fwrite($fichero, "Sexo: $sexo\n");
fwrite($fichero, "Email: $email\n");
fwrite($fichero, "Poblacion: $poblacion\n");
fwrite($fichero, "Pais: $pais\n");
fwrite($fichero, "Usuario: $usuario\n");
fwrite($fichero, "Password: $password\n");

fclose($fichero);

// Guardar foto
$nombreFoto = "registro/fotos/img_$id.jpg";
move_uploaded_file($_FILES['foto']['tmp_name'], $nombreFoto);

// Mostrar datos
echo "<h2>Datos Registro de Usuario</h2>";
echo nl2br(file_get_contents("registro/usuario_$id.txt"));
echo "<br><img src='$nombreFoto' width='150'>";
?>
