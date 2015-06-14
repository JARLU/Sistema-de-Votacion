<?php


class Diputado {
	private $id;
	private $nombres;
	private $apellidos;
	private $dui;
	private $direccion;
	private $candidatura;
	private $partido;
	private $coalision;
	private $departamento;

	public function getId() {
		return $this->id;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public function getNombres() {
		return $this->nombres;
	}

	public function getApellidos() {
		return $this->apellidos;
	}

	public function getDui() {
		return $this->dui;
	}

	public function getDireccion() {
		return $this->direccion;
	}

	public function getCandidatura() {
		return $this->candidatura;
	}

	public function getPartido() {
		return $this->partido;
	}

	public function getCoalision() {
		return $this->coalision;
	}

	public function getDepartamento() {
		return $this->departamento;
	}

	public function setNombres($nombres) {
		$this->nombres = $nombres;
	}

	public function setApellidos($apellidos) {
		$this->apellidos = $apellidos;
	}
	public function setDui($dui) {
		$this->dui = $dui;
	}

	public function setDireccion($direccion){
		$this->direccion = $direccion;
	}

	public function setCandidatura($candidatura){
		$this->candidatura = $candidatura;
	}

	public function setPartido($partido) {
		$this->partido = $partido;
	}

	public function setCoalision($coalision) {
		$this->coalision = $coalision;
	}

	public function setDepartamento($departamento) {
		$this->departamento = $departamento;
	}

}