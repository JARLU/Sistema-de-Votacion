<?php
class Presidente{
	private $id;
	private $nombre;
	private $apellido;
	private $dui;
	private $direccion;
	private $candidatura;
	private $partido;

	public function getId() {
		return $this->id;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public function getNombre() {
		return $this->nombre;
	}

	public function getApellido() {
		return $this->apellido;
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

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}

	public function setApellido($apellido){
		$this->apellido = $apellido;
	}

	public function setDui($dui){
		$this->dui = $dui;
	}

	public function setDireccion($direccion){
		$this->direccion = $direccion;
	}

	public function setCandidatura($candidatura){
		$this->candidatura = $candidatura;
	}

	public function setPartido($partido){
		$this->partido = $partido;
	}
}