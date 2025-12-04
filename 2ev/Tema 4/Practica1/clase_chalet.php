<?php
require_once("clase_inmueble.php");

class Chalet extends Inmueble {
    private $metrosParcela;
    private $piscina;
    private $paellero;

    public function __construct($codigo, $direccion, $poblacion, $metros, $habitaciones, $banos, $garaje, $precio, $rutaFoto, $metrosParcela, $piscina, $paellero) {
        parent::__construct($codigo, "Chalet", $direccion, $poblacion, $metros, $habitaciones, $banos, $garaje, $precio, $rutaFoto);
        $this->metrosParcela = $metrosParcela;
        $this->piscina = $piscina;
        $this->paellero = $paellero;
    }

    public function mostrarInmueble() {
        parent::mostrarInmueble();
        echo "Parcela: " . $this->metrosParcela . " m2<br>";
        echo "Piscina: " . $this->piscina . "<br>";
        echo "Paellero: " . $this->paellero . "<br>";
    }

    public function calculaComision() {
        $comision = $this->precio * 0.10;
        if ($this->piscina == "S") $comision += 1000;
        if ($this->paellero == "S") $comision += 500;
        return $comision;
    }
}
?>
