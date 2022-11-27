<?php 
class Cliente{
    
    
    
    
    

    public function __construct(
        public string $nonbre,
        private int $numero,
        private $soporteAlquilados =[],
        private int $numSoportesAlquilados,
        private $maxAlquilerConcurrente=3)
    {
        
    }

	public function getNumero(): int {
		return $this->numero;
	}
	
	public function setNumero(int $numero): self {
		$this->numero = $numero;
		return $this;
	}

	
	public function getNumSoportesAlquilados(): int {
		return $this->numSoportesAlquilados;
	}

    public function muestraResumen():string{
        return $this->nonbre.$this->numSoportesAlquilados;
    }
    
    public function tieneAlquilado(Soporte $s):bool{

        if (in_array($s,$this::$soporteAlquilados)) {
            return true;
        }else {
            return false;
        }
        
    }

    public function alquilar(Soporte $s):bool{
        if (in_array($s,$this::$soporteAlquilados) ) {
            # code...
        }
    }
}
?>