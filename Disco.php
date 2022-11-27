<?php 
include_once("Soporte.php");
class Disco extends Soporte{
    
    

	public function __construct(
		string $titulo,
		int $numero,
		int $precio,
		private string $idiomas,
		private string $formatPantalla) {

		parent::__construct($titulo,$numero,$precio);
	}


	public function getFormatPantalla() {
		return $this->formatPantalla;
	}
	

	public function setFormatPantalla($formatPantalla): self {
		$this->formatPantalla = $formatPantalla;
		return $this;
	}

	 public function muestraResumen():string{
		
		return	parent::muestraResumen().$this::$idiomas.$this::$formatPantalla;
		
	 }
	

}
?>