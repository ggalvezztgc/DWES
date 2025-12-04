<?php
    class Portatil{
        private $codigo;
        private $descripcion;
        private $unidades;
        private $precio;
        private $defectuoso;

        public function __construct($codigo, $descripcion, $unidades, $precio, $defectuoso){
        $this->codigo=$codigo;
        $this->descripcion=$descripcion;
        $this->unidades=$unidades;
        $this->precio=$precio;
        $this->defectuoso=$defectuoso;
        }

        public function anadeDefectuoso(){
            $this->defectuoso = true;
        }

        public function eliminaDefectuoso(){
            $this->defectuoso = false;
        }

        public function muestraPortatil(){
            echo "Código: " . $this->codigo . "<br>";
            echo "Descripción: " . $this->descripcion . "<br>";
            echo "Unidades: " . $this->unidades . "<br>"; 
            echo "Precio: " . $this->precio . "€" . "<br>";
            echo "Defectuoso: " . ($this->defectuoso ? "Está defectuoso" : "No está defectuoso") .  "<br>***********************<br>";
        }
    }    
?>