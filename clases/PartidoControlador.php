<?php
class PartidoControlador extends Partido{
	
	public function guardarDatos($con, $objVotante) {
	$variableSql = "INSERT INTO  inscri_partido ";
	$variableSql .= "(id,nombre_partido,bandera,";
	$variableSql .= "dui,representante) ";
	$variableSql .="VALUES (";
	$variableSql.="'".$objVotante[0]."',";
	$variableSql.="'".$objVotante[1]."',";
	$variableSql.="'".$objVotante[2]."',";
	$variableSql.="'".$objVotante[3]."',";
	$variableSql.="'".$objVotante[4]."');";
	return consultaA($con, $variableSql);

	}

	public function modificarDatos($con, $objVotante) {
	$variableSql = "UPDATE inscri_partido SET ";
	$variableSql .= "nombre_partido = '".$objVotante[1]."'";
	$variableSql .= " ,bandera = '".$objVotante[2]."'";
	$variableSql .= " ,dui = '".$objVotante[3]."'";
	$variableSql .= " ,representante = '".$objVotante[4]."'";
	$variableSql .= " WHERE id = ".$objVotante[0].";";
	return consultaA($con, $variableSql);

	}
}
