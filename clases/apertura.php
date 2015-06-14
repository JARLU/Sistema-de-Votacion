<?php
class Apertura{
	private $id;
	private $presidencial;
	private $diputados;
	private $alcaldes;
	private $anio;

	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getPresidencial(){
		return $this->presidencial;
	}

	public function getDiputados(){
		return $this->diputados;
	}

	public function getAlcaldes(){
		return $this->alcaldes;
	}

	public function getAnio(){
		return $this->anio;
	}

	public function setPresidencial($presidencial){
		$this->presidencial = $presidencial;
	}

	public function setDiputados($diputados){
		$this->diputados = $diputados;
	}

	public function setAlcaldes($alcaldes){
		$this->alcaldes = $alcaldes;
	}

	public function setAnio($anio){
		$this->anio = $anio;
	}
}

?>