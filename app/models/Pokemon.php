<?php
abstract class Pokemon
{
    public string $nombre;
    public float $vida;
    public int $nivel;
    public array $movimientos;

    public function __construct($nombre, $vida, $nivel, $movimientos)
    {
        $this->nombre = $nombre;
        $this->vida = $vida;
        $this->nivel = $nivel;
        $this->movimientos = $movimientos;
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
     * Get the value of vida
     */
    public function getVida()
    {
        return $this->vida;
    }

    /**
     * Set the value of vida
     *
     * @return  self
     */
    public function setVida($vida)
    {
        $this->vida = $vida;

        return $this;
    }

    /**
     * Get the value of nivel
     */
    public function getNivel()
    {
        return $this->nivel;
    }

    /**
     * Set the value of nivel
     *
     * @return  self
     */
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;

        return $this;
    }

    /**
     * Get the value of movimientos
     */
    public function getMovimientos()
    {
        return $this->movimientos;
    }

    /**
     * Set the value of movimientos
     *
     * @return  self
     */
    public function setMovimientos($movimientos)
    {
        $this->movimientos = $movimientos;

        return $this;
    }
    public function evolucionar()
    {
        if ($this->nombre == "Pikachu") {
            // Pikachu evoluciona a Raichu
            $this->nombre = "Raichu";
            // Aumentamos la vida al evolucionar
            $this->vida += 20;

            echo" Pikachu  ha evolucionado ". $this->nombre . " 🎉<br>";
        } else {
            echo $this->nombre . " no puede evolucionar en este momento.<br>";
        }

    }
    public function atacar(Pokemon $pokemon, int $daño)
    {
        // Restamos el daño a la vida del Pokémon atacado
        $pokemon->vida -= $daño;
        echo $this->nombre . " ataca a " . $pokemon->nombre . " y le causa " . $daño . " puntos de daño.<br>";

        if ($pokemon->vida <= 0) {
            // Aseguramos que la vida no sea negativa
            $pokemon->vida = 0;
            echo $pokemon->nombre . " se ha debilitado 😵<br>";
        } else {
            echo $pokemon->nombre . " tiene " . $pokemon->vida . " PS restantes.<br>";
        }
    }
    public function aprenderMovimiento(string $movimiento)
    {
        // Añadir el movimiento al array de movimientos del Pokémon
        $this->movimientos[] = $movimiento;
        echo $this->nombre . " ha aprendido el movimiento: " . $movimiento . "! 🎉<br>";
    }
    public function eliminarMovimiento(string $nombre)
    {
        // Buscar el índice del movimiento en el array de movimientos
        $key = array_search($nombre, $this->movimientos);

        if ($key != false) {
            // El movimiento fue encontrado, lo eliminamos
            unset($this->movimientos[$key]);
            // Reindexar el array para mantener índices continuos
            $this->movimientos = array_values($this->movimientos);
            echo $this->nombre . " ha olvidado el movimiento: " . $nombre . " 😞<br>";
        } else {
            echo $this->nombre . " no conoce el movimiento: " . $nombre . ".<br>";
        }
    }
    public static function contarPokemons(): int
    {
        static $contador = 0;
        return ++$contador;
    }






    public function __tostring()
    {
        //Utilizo el implode para separar el array en string separados por comas para mostarlo en el tooString
        $movimientosAprendidos = implode(", ", $this->movimientos);
        return "Nombre: " . $this->nombre . " tiene " . $this->vida . " ps de vida, su nivel es " . $this->nivel . " y conoce los movimientos: " . $movimientosAprendidos;
    }
}
?>