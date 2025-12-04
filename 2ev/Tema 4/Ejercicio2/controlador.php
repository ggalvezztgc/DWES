<?php
    include ('modelo.php');
    include ('vista.php');

    $productoHardware = new Producto( 156, "Mouse Nvidia", "teclado Mars Gaming", "Hardware", 0.3, 69 , 16);
    $productoSoftware = new Producto(256, "Proton VPN Web", "Clave windows 11 pro", "Software", 0.0, 150 , 60);

    $productoHardware->mostrarProducto();
    $productoSoftware->mostrarProducto();

    $productoHardware->aumentaStock(12);
    $productoHardware->mostrarProducto();

    $productoSoftware->disminuyeStock(5);
    $productoSoftware->mostrarProducto();

    echo "IVA del hardware: " . $productoHardware->ivaProducto() . "€<br>";
    echo "Precio con IVA: " . $productoHardware->PrecioconIva() . "€<br><br>";

    echo "IVA del software: " . $productoSoftware->ivaProducto() . "€<br>";
    echo "Precio con IVA: " . $productoSoftware->PrecioconIva() . "€<br>";
?>