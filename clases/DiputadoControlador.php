<?php

class DiputadoControlador extends Diputado{
	public function guardarDatos($con,$objDiputado) {
		$variableSql = "INSERT INTO inscrip_diputado ";
		$variableSql .= "(id,nombres,apellidos,dui,direccion, ";
		$variableSql .= "candidatura,partido,coalision,departamento) ";
		$variableSql .= "VALUES (";
		$variableSql.="'".$objDiputado[0]."',";
		$variableSql.="'".$objDiputado[1]."',";
		$variableSql.="'".$objDiputado[2]."',";
		$variableSql.="'".$objDiputado[3]."',";
		$variableSql.="'".$objDiputado[4]."',";
		$variableSql.="'".$objDiputado[5]."',";
		$variableSql.="'".$objDiputado[6]."',";
		$variableSql.="'".$objDiputado[7]."',";
		$variableSql.="'".$objDiputado[8]."');";
		return consultaA($con, $variableSql);

		}

		public function modificarDatos($con,$objDiputado) {
			$variableSql = "UPDATE inscrip_diputado SET  ";
			$variableSql .= "nombres = '".$objDiputado[1]."'";
			$variableSql .= " ,apellidos = '".$objDiputado[2]."'";
			$variableSql .= " ,dui = '".$objDiputado[3]."'";
			$variableSql .= " ,direccion = '".$objDiputado[4]."'";
			$variableSql .= " ,candidatura = '".$objDiputado[5]."'";
			$variableSql .= " ,partido = '".$objDiputado[6]."'";
			$variableSql .= " ,coalision = '".$objDiputado[7]."'";
			$variableSql .= " ,departamento = '".$objDiputado[8]."'";
			$variableSql .= " WHERE id = ".$objDiputado[0].";";
			return consultaA($con, $variableSql);
		}


}