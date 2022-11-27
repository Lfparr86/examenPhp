<?php 
include_once("Soporte.php");
class Juego extends Soporte{

	public function getMinNumJugadores() {
		return $this->minNumJugadores;
	}
	

	public function setMinNumJugadores($minNumJugadores): self {
		$this->minNumJugadores = $minNumJugadores;
		return $this;
	}


	public function getMaxNumJugadores() {
		return $this->maxNumJugadores;
	}
	

	public function setMaxNumJugadores($maxNumJugadores): self {
		$this->maxNumJugadores = $maxNumJugadores;
		return $this;
	}


	public function __construct(
		string $titulo,
		int $numero,
		int $precio,
		public string $consola,
	 	private int $minNumJugadores,
	 	private int $maxNumJugadores) {
		
		parent::__construct($titulo,$numero,$precio);
		
	}

	public function muestraJugadoresPosible(){
		if ($this->minNumJugadores && $this->maxNumJugadores) {
			echo "jugadores correctos";
		}
	}

	public function muestraResumen():string{
		
		return	parent::muestraResumen().$this::$minNumJugadores.$this::$maxNumJugadores;
		
	 }
}

?>