<?php
class AperturaControlador extends Apertura{
	public function guardarDatos($con,$objApertura) {
		$variableSql = "INSERT INTO apertura ";
		$variableSql .= "(id,presidencial,diputados,";
		$variableSql .= "alcaldes,anio) ";
		$variableSql .= "VALUES (";
		$variableSql.="'".$objApertura[0]."',";
		$variableSql.="'".$objApertura[1]."',";
		$variableSql.="'".$objApertura[2]."',";
		$variableSql.="'".$objApertura[3]."',";
		$variableSql.="'".$objApertura[4]."');";
		return consultaA($con, $variableSql);

	}

	public function modificarDatos($con, $objApertura) {
		$variableSql = "UPDATE apertura SET ";
		$variableSql .= "presidencial, = '".$objApertura[1]."'";
		$variableSql .= " ,diputados = '".$objApertura[2]."'";
		$variableSql .= " ,alcaldes = '".$objApertura[3]."'";
		$variableSql .= " ,anio = '".$objApertura[4]."'";
		$variableSql .= " WHERE id = ".$objApertura[0].";";
		return consultaA($con, $variableSql);

	}
}
