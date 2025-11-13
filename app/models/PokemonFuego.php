<?php
include_once $_SERVER["DOCUMENT_ROOT"] . ("/app/models/Pokemon.php");
class PokemonFuego extends Pokemon
{
    public int $idFuego;

    public function __construct($nombre, $vida, $nivel, $movimientos, $idFuego)
    {
        parent::__construct($nombre, $vida, $nivel, $movimientos);
        $this->idFuego = $idFuego;
    }

    /**
     * Get the value of idFuego
     */
    public function getIdFuego()
    {
        return $this->idFuego;
    }

    /**
     * Set the value of idFuego
     *
     * @return  self
     */
    public function setIdFuego($idFuego)
    {
        $this->idFuego = $idFuego;

        return $this;
    }
    public function atacar(Pokemon $pokemon, int $daño): void
    {
        echo $this->nombre . "ha atacado a " . $pokemon->nombre . " con un ataque de daño " . $daño;
        // Reducir vida del Pokémon atacado
        $pokemon->vida -= $daño;
    }


    public function __tostring()
    {
        return parent::__tostring() . " Su id de fuego es " . $this->idFuego;
    }
}
?>