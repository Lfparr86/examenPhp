<?php
include_once("Soporte.php");
class CintaVideo extends Soporte{
    

    public function getDuracion()
    {
        return $this->duracion;
    }

    public function setDuracion($duracion)
    {
        $this->duracion = $duracion;

        return $this;
    }

    public function __construct(
    string $titulo,
    int $numero,
    int $precio,
    private int $duracion) {

    parent::__construct($titulo,$numero,$precio);
    	
    }
}

?>