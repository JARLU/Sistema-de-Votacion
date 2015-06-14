<?php
class VotanteControlador extends Votante{

	public function guardarDatos($con,$objVotante) {
		$variableSql = "INSERT INTO registro_votante ";
		$variableSql .= "(id,dui,nombre,apellido,foto,";
		$variableSql .= "genero,fecha,direccion,id_depa,id_muni) ";
		$variableSql .= "VALUES (";
		$variableSql.="'".$objVotante[0]."',";
		$variableSql.="'".$objVotante[1]."',";
		$variableSql.="'".$objVotante[2]."',";
		$variableSql.="'".$objVotante[3]."',";
		$variableSql.="'".$objVotante[4]."',";
		$variableSql.="'".$objVotante[5]."',";
		$variableSql.="'".$objVotante[6]."',";
		$variableSql.="'".$objVotante[7]."',";
		$variableSql.="'".$objVotante[8]."',";
		$variableSql.="'".$objVotante[9]."');";
		return consultaA($con, $variableSql);

	}

	public function modificarDatos($con, $objVotante) {
		$variableSql = "UPDATE registro_votante SET ";
		$variableSql .= "dui, = '".$objVotante[1]."'";
		$variableSql .= " ,nombre = '".$objVotante[2]."'";
		$variableSql .= " ,apellido = '".$objVotante[3]."'";
		$variableSql .= " ,foto = '".$objVotante[4]."'";
		$variableSql .= " ,genero = '".$objVotante[5]."'";
		$variableSql .= " ,fecha = '".$objVotante[6]."'";
		$variableSql .= " ,direccion = '".$objVotante[7]."'";
		$variableSql .= " ,id_depa = '".$objVotante[8]."'";
		$variableSql .= " ,id_muni = '".$objVotante[9]."'";
		$variableSql .= " WHERE id = ".$objVotante[0].";";
		return consultaA($con, $variableSql);

	}
}
