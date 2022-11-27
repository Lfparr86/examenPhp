<?php 
declare(strict_types=1);
class Soporte{
	private static $IVA =21;

	public function __construct (
		public string $titulo, 
		protected int $numero, 
		private int $precio){

	}


	public function getPrecio():int {
		return $this->precio;
	}


	public function getNumero():int {
		return $this->numero;
	}

	public function getPrecioConIva():int{

		return $this->precio - ($this->precio * $this::$IVA);
	}
	public function muestraResumen():string{
		
		return $this->titulo.$this->numero.$this->precio;
	}
}


?>