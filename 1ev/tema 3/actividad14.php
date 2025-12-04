
    <?php
    $producto = 1;
    $contador = 0;
    $numero = 1;

    while ($contador < 10) {
        $producto *= $numero;
        $numero += 2; 
        $contador++;
    }

    echo "<p>El producto de los 10 primeros números impares es: <strong>$producto</strong></p>";
    ?>