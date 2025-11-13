<?php
class Entrenador
{
    public string $nombre;
    public int $edad;
    public array $pokemons;

    public function __construct($nombre, $edad, $pokemons)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->pokemons = $pokemons;
    }

    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of edad
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set the value of edad
     *
     * @return  self
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    /**
     * Get the value of pokemons
     */
    public function getPokemons()
    {
        return $this->pokemons;
    }

    /**
     * Set the value of pokemons
     *
     * @return  self
     */
    public function setPokemons($pokemons)
    {
        $this->pokemons = $pokemons;

        return $this;
    }
    // Método para agregar un Pokémon
    public function agregarPokemon($pokemon): void
    {
        $this->pokemons[] = $pokemon;
    }
    // Método para eliminar un Pokémon
    public function eliminarPokemon($pokemon): void
    {
        $index = array_search($pokemon, $this->pokemons);
        if ($index != false) {
            unset($this->pokemons[$index]);
            // Reindexar el array
            $this->pokemons = array_values($this->pokemons);
        }
    }
    public function __tostring()
    {
        $pokemonsEntrenador = implode(", ", $this->pokemons);
        return "El nombre del entrenador es " . $this->nombre . " cuya edad es " . $this->edad . " y sus pokemons son: " . $pokemonsEntrenador;
    }
}
?>