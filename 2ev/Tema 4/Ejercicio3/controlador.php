<?php
include('modelo.php');
include('vista.php');

$portAula1 = new Portatil("MacBook", "M3 16Gb RAM 512GB SSD", 33, 1250.66, false);
$portAula2 = new Portatil("Acer Aspire 3", "I7 16Gb RAM 256GB SSD", 100, 980.56, false);

$portAula1->anadeDefectuoso();
$portAula1->muestraPortatil();

$portAula1->eliminaDefectuoso();
$portAula1->muestraPortatil();

$portAula1->muestraPortatil();
$portAula2->muestraPortatil();
?>