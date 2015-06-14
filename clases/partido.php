<?php


class Partido {
	private $id;
	private $nombre_partido;
	private $bandera;
	private $dui;
	private $representante;

	public function getId() {
		return $this->id;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public function getNombre_partido() {
		return $this->nombre_partido;
	}

	public function getBandera() {
		return $this->bandera;
	}

	public function getDui() {
		return $this->dui;
	}

	public function getRepresentante() {
		return $this->representante;
	} 

	public function setNombre_partido($nombre_partido){
		$this->nombre_partido = $nombre_partido;
	}

	public function setBandera($bandera) {
		$this->bandera = $bandera;
	}

	public function setDui($dui) {
		$this->dui = $dui;
	}

	public function setRepresentante($representante) {
		$this->representante = $representante;
	}

}
