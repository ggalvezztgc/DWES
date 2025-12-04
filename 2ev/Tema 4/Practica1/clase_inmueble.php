<?php

abstract class Inmueble {
    protected $codigo;
    protected $tipo;
    protected $direccion;
    protected $poblacion;
    protected $metros;
    protected $habitaciones;
    protected $banos;
    protected $garaje;
    protected $precio;
    protected $rutaFoto;

    public function __construct($codigo, $tipo, $direccion, $poblacion, $metros, $habitaciones, $banos, $garaje, $precio, $rutaFoto) {
        $this->codigo = $codigo;
        $this->tipo = $tipo;
        $this->direccion = $direccion;
        $this->poblacion = $poblacion;
        $this->metros = $metros;
        $this->habitaciones = $habitaciones;
        $this->banos = $banos;
        $this->garaje = $garaje;
        $this->precio = $precio;
        $this->rutaFoto = $rutaFoto;
    }

    public function calculaIVA() {
        return $this->precio * 1.10;
    }

    public function mostrarInmueble() {
        echo "Código: " . $this->codigo . "<br>";
        echo "Tipo: " . $this->tipo . "<br>";
        echo "Dirección: " . $this->direccion . "<br>";
        echo "Población: " . $this->poblacion . "<br>";
        echo "Metros: " . $this->metros . " m2<br>";
        echo "Habitaciones: " . $this->habitaciones . "<br>";
        echo "Baños: " . $this->banos . "<br>";
        echo "Garaje: " . $this->garaje . "<br>";
        echo "Precio base: " . number_format($this->precio, 2, ",", ".") . " €<br>";
        echo "Foto: " . $this->rutaFoto . "<br>";
    }

    abstract public function calculaComision();
}
?>
