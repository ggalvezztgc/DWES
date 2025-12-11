<?php
$usuarios = array(
    array(1, "Luis", "Sancho Blas", "lsancho", "pass1"),
    array(2, "Sara", "Solis Romero", "ssolis", "pass2"),
    array(3, "Ana", "Mas Medina", "amas", "pass3"),
    array(4, "Pedro", "Ros Sendra", "pros", "pass4")
);

$roles = array(
    array(1, "Administrador"),
    array(2, "Profesor"),
    array(3, "Alumno")
);

$permisos = array(
    array(1, "Insertar"),
    array(2, "Borrar"),
    array(3, "Modificar"),
    array(4, "Consultar"),
    array(5, "Listar")
);

$roles_permisos = array(
    array(1,1), array(1,2), array(1,3), array(1,4), array(1,5),
    array(2,1), array(2,4), array(2,5),
    array(3,4)
);

$usuarios_roles = array(
    array(1,1),
    array(2,3),
    array(3,2),
    array(4,2)
);
