<?php
    class Producto{
        private $codProducto;
        private $nombreProducto;
        private $descripcion;
        private $categoria;
        private $peso;
        private $precio;
        private $stock;
    
    public function __construct($codProducto, $nombreProducto, $descripcion, $categoria, $peso, $precio, $stock){
        $this->codProducto=$codProducto;
        $this->nombreProducto=$nombreProducto;
        $this->descripcion=$descripcion;
        $this->categoria=$categoria;
        $this->peso=$peso;
        $this->precio=$precio;
        $this->stock=$stock;
    }

    public function aumentaStock($cantidad = 1){
        $this->stock += $cantidad;
    }

    public function disminuyeStock($cantidad = 1){
        $this->stock -= $cantidad;
    }

    public function ivaProducto($iva = 21){
        return $this->precio * ($iva / 100);
    }

    public function PrecioconIva($iva = 21){
        return $this->precio + $this->ivaProducto($iva);
    }

      public function mostrarProducto() {
        echo "Código: " . $this->codProducto . "<br>";
        echo "Nombre: " . $this->nombreProducto . "<br>";
        echo "Descripción: " . $this->descripcion . "<br>"; 
        echo "Peso: " . $this->peso . "<br>";
        echo "Precio: " . $this->precio .  "€" . "<br>";
        echo "Stock: " . $this->stock . " Unidades" . "<br>**********************<br>";
    }
}
?> 