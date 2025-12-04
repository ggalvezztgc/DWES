<?php
require_once("clase_inmueble.php");

class Vivienda extends Inmueble {
    private $altura;
    private $balcon;
    private $exterior;

    public function __construct($codigo, $direccion, $poblacion, $metros, $habitaciones, $banos, $garaje, $precio, $rutaFoto, $altura, $balcon, $exterior) {
        parent::__construct($codigo, "Vivienda", $direccion, $poblacion, $metros, $habitaciones, $banos, $garaje, $precio, $rutaFoto);
        $this->altura = $altura;
        $this->balcon = $balcon;
        $this->exterior = $exterior;
    }

    public function mostrarInmueble() {
        parent::mostrarInmueble();
        echo "Altura: " . $this->altura . "<br>";
        echo "Balcón: " . $this->balcon . "<br>";
        echo "Exterior: " . $this->exterior . "<br>";
    }

    public function calculaComision() {
        return $this->precio * 0.05;
    }
}
?>
