<?php
    $articulos = array(array(100, "Monitor Samsung V-43e", 134.56),
    
    array(230, "Portatil Asus A-512p", 621.33),
    array(324, "Proyector Epson RF500", 339.77),
    array(451, "Router TPlink G540", 84.20));

    function getArticulo($articulos, $cod){
        $datos_articulo = $articulos[$cod];
        return $datos_articulo;
    }
?>  