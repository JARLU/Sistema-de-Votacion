<?php
class Alcalde{
	private $id;
	private $nombre;
	private $apellido;
	private $dui;
	private $genero;
	private $direccion;
	private $partido;
	private $id_depa;
	private $id_muni;

	public function getId() {
		return $this->id;
	}

	public function getNombre() {
		return $this->nombre;
	}

	public function getApellido() {
		return $this->apellido;
	}

	public function getDui(){
		return $this->dui;
	}

	public function getGenero() {
		return $this->genero;
	}

	public function getDireccion() {
		return $this->direccion;
	}

	public function getPartido() {
		return $this->partido;
	}

	public function getId_depa() {
		return $this->id_depa;
	}

	public function getId_muni(){
		return $this->id_muni;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public function setNombre($nombre) {
		$this->nombre = $nombre;
	}

	public function setApellido($apellido) {
		$this->apellido = $apellido;
	}

	public function setDui($dui) {
		$this->dui = $dui;
	}

	public function setGenero($genero) {
		$this->genero = $genero;
	}

	public function setDireccion($direccion) {
		$this->direccion = $direccion;
	}

	public function setPartido($partido) {
		$this->partido = $partido;
	}

	public function setId_depa($id_depa) {
		$this->id_depa = $id_depa;
	}

	public function setId_muni($id_muni) {
		$this->id_muni = $id_muni;
	}

}