<?php
include_once $_SERVER["DOCUMENT_ROOT"] . ("/app/models/Pokemon.php");
class PokemonAgua extends Pokemon{
    public int $idAgua;

    public function __construct($nombre, $vida, $nivel, $movimientos, $idAgua){
        parent::__construct($nombre, $vida, $nivel, $movimientos);
        $this->idAgua = $idAgua;
    }

    /**
     * Get the value of idAgua
     */ 
    public function getIdAgua()
    {
        return $this->idAgua;
    }

    /**
     * Set the value of idAgua
     *
     * @return  self
     */ 
    public function setIdAgua($idAgua)
    {
        $this->idAgua = $idAgua;

        return $this;
    }
    public function nadar(): void {
        echo $this->nombre ."está nadando bajo el agua...";
    }

    public function __tostring(){
        return parent::__tostring(). " su id de agua es ".$this->idAgua;
    }
}
?>