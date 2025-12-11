<?php
function accesoUsuario($usuarios, $usuario, $pass){
    foreach($usuarios as $valor){
        if ($valor[3]==$usuario && $valor[4]==$pass){
            return true;
        }
    }
    return false;
}

function devuelveId($usuario, $usuarios){
    foreach($usuarios as $valor){
        if ($valor[3]==$usuario){
            return $valor[0];
        }
    }
    return 0;
}

function devuelveRol($id_usu, $usuarios_roles){
    foreach($usuarios_roles as $valor){
        if ($valor[0]==$id_usu){
            return $valor[1];
        }
    }
    return 0;
}

function devuelvePermisos($id_rol, $roles_permisos){
    $id_permisos = array();
    foreach($roles_permisos as $valor){
        if ($valor[0]==$id_rol){
            $id_permisos[] = $valor[1];
        }
    }
    return $id_permisos;
}

function muestraUsuario($id_usu, $usuarios){
    foreach($usuarios as $valor){
        if ($valor[0]==$id_usu){
            return $valor[1]." ".$valor[2];
        }
    }
    return "";
}

function muestraRol($id_rol, $roles){
    foreach($roles as $valor){
        if ($valor[0]==$id_rol){
            return $valor[1];
        }
    }
    return "";
}

function muestraPermisos($listaPermisos, $permisos){
    $nombrePermisos = "";
    foreach ($listaPermisos as $valor){
        foreach($permisos as $dato){
            if ($dato[0]==$valor){
                $nombrePermisos.=$dato[1]." ";
            }
        }
    }
    return trim($nombrePermisos);
}
