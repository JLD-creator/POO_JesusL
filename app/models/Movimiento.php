<?php
class Movimiento
{
    public string $nombre;
    public int $poder;

    public function __construct($nombre, $poder)
    {
        $this->nombre = $nombre;
        $this->poder = $poder;
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
     * Get the value of poder
     */
    public function getPoder()
    {
        return $this->poder;
    }

    /**
     * Set the value of poder
     *
     * @return  self
     */
    public function setPoder($poder)
    {
        $this->poder = $poder;

        return $this;
    }

    // Método para ejecutar el movimiento
    public function ejecutar(): void
    {
        echo "El movimiento ".$this->nombre." se ha ejecutado y ha causado ". $this->poder." de daño.";
    }


    public function __tostring()
    {
        return "el nombre del movimiento es " . $this->nombre . " y hace " . $this->poder . " de daño";
    }
}
?>