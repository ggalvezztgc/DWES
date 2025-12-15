<?php
session_start();

$timeout = 900; 

if (!isset($_SESSION['usuario'])) {
    header("Location: CURSO.PHP");
    exit;
}

if (time() - $_SESSION['ultima'] > $timeout) {
    session_destroy();
    die("Sesión expirada por inactividad. <a href='CURSO.PHP'>Volver a acceder</a>");
}

$_SESSION['ultima'] = time();
