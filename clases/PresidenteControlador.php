<?php
class PresidenteControlador extends Presidente{

	public function guardarDatos($con,$objPresidente) {
		$variableSql = "INSERT INTO inscrip_presidente ";
		$variableSql .= "(id,nombre,apellido,dui,";
		$variableSql .= "direccion,candidatura,partido) ";
		$variableSql .="VALUES (";
		$variableSql.="'".$objPresidente[0]."',";
		$variableSql.="'".$objPresidente[1]."',";
		$variableSql.="'".$objPresidente[2]."',";
		$variableSql.="'".$objPresidente[3]."',";
		$variableSql.="'".$objPresidente[4]."',";
		$variableSql.="'".$objPresidente[5]."',";
		$variableSql.="'".$objPresidente[6]."');";
		return consultaA($con, $variableSql);

	}

	public function modificarDatos($con, $objPresidente){
		$variableSql = "UPDATE inscrip_presidente SET ";
		$variableSql .= "nombre, = '".$objPresidente[1]."'";
		$variableSql .= " ,apellido = '".$objPresidente[2]."'";
		$variableSql .= " ,dui = '".$objPresidente[3]."'";
		$variableSql .= " ,direccion = '".$objPresidente[4]."'";
		$variableSql .= " ,candidatura = '".$objPresidente[5]."'";
		$variableSql .= " ,partido = '".$objPresidente[6]."'";
		$variableSql .= " WHERE id = ".$objPresidente[0].";";
		return consultaA($con, $variableSql);

	}

}