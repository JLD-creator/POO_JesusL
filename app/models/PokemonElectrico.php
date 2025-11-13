<?php
include_once $_SERVER["DOCUMENT_ROOT"] . ("/app/models/Pokemon.php");
class PokemonElectrico extends Pokemon{
    public int $carga;

    public function __construct($nombre, $vida, $nivel, $movimientos, $carga){
        parent::__construct($nombre, $vida, $nivel, $movimientos);
        $this->carga = $carga;
    }

    /**
     * Get the value of carga
     */ 
    public function getCarga()
    {
        return $this->carga;
    }

    /**
     * Set the value of carga
     *
     * @return  self
     */ 
    public function setCarga($carga)
    {
        $this->carga = $carga;

        return $this;
    }
    public function cargar(int $energia): void
    {
        echo $this->nombre ." está cargando: ".$energia. " de energía.";
    }

    public function __tostring(){
        return parent:: __tostring(). " y esta cargando ".$this->carga." energia"; 
    }
}
?>