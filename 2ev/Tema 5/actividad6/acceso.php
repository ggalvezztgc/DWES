<?php
include('acl.php');
include('funciones.php');

$info = "";
$menu = "";

if (isset($_POST['usuario']) && isset($_POST['pass'])){
    $usuario=$_POST['usuario'];
    $pass=$_POST['pass'];

    if (accesoUsuario($usuarios, $usuario, $pass)){
        $id_usu = devuelveId($usuario, $usuarios);
        $id_rol = devuelveRol($id_usu, $usuarios_roles);
        $listaPermisos = devuelvePermisos($id_rol, $roles_permisos);

        $info .= "Nombre: ".muestraUsuario($id_usu, $usuarios)."<br>";
        $info .= "Rol: ".muestraRol($id_rol, $roles)."<br>";
        $info .= "Permisos: ".muestraPermisos($listaPermisos, $permisos)."<br>";

        $menu .= "<h3>Menú disponible</h3>";
        if (in_array(1,$listaPermisos)) $menu .= "- Insertar<br>";
        if (in_array(2,$listaPermisos)) $menu .= "- Borrar<br>";
        if (in_array(3,$listaPermisos)) $menu .= "- Modificar<br>";
        if (in_array(4,$listaPermisos)) $menu .= "- Consultar<br>";
        if (in_array(5,$listaPermisos)) $menu .= "- Listar<br>";
    } else {
        $info .= "<span style='color:red;'>Usuario o contraseña incorrectos.</span>";
    }
}
?>
<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>ACL</title></head>
<body>
<h2>Acceso ACL</h2>
<form action="" method="POST">
Usuario: <input type="text" name="usuario"><br>
Contraseña: <input type="password" name="pass"><br>
<input type="submit" value="Acceso">
</form>
<hr>
<?php
echo $info;
echo $menu;
?>
</body>
</html>
