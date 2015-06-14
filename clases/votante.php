<?php
class Votante{
	private $id;
	private $dui;
	private $nombre;
	private $apellido;
	private $foto;
	private $genero;
	private $fechavenci;
	private $direccion;
	private $id_depa;
	private $id_muni;

	public function getId() {
		return $this->id;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public function getDui() {
		return $this->dui;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function getApellido(){
		return $this->apellido;
	}

	public function getFoto(){
		return $this->foto;
	}

	public function getGenero(){
		return $this->genero;
	}

	public function getFechavenci(){
		return $this->fechavenci;
	}

	public function getDireccion(){
		return $this->direccion;
	}

	public function getId_depa(){
		return $this->id_depa;
	}

	public function getId_muni(){
		return $this->id_muni;
	}

	public function setDui($dui){
		$this->dui = $dui;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}

	public function setApellido($apellido){
		$this->apellido = $apellido;
	}

	public function setFoto($foto){
		$this->foto = $foto;
	}

	public function setGenero($genero){
		$this->genero = $genero;
	}

	public function setFechavenci($fechavenci){
		$this->fechavenci = $fechavenci;
	}

	public function setDireccion($direccion){
		$this->direccion = $direccion;
	}

	public function setId_depa($id_depa){
		$this->id_depa = $id_depa;
	}

	public function setId_muni($id_muni){
		$this->id_muni = $id_muni;
	}
}
?>