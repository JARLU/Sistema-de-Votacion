<?php
class AlcaldeControlador extends Alcalde{

	public function guardarDatos($con,$objAlcalde) {
		$variableSql = "INSERT INTO inscrip_alcalde ";
		$variableSql .= "(id,nombre,apellido,dui,genero,direccion,";
		$variableSql .= "partido,id_depa,id_muni) ";
		$variableSql .= "VALUES (";
		$variableSql.="'".$objAlcalde[0]."',";
		$variableSql.="'".$objAlcalde[1]."',";
		$variableSql.="'".$objAlcalde[2]."',";
		$variableSql.="'".$objAlcalde[3]."',";
		$variableSql.="'".$objAlcalde[4]."',";
		$variableSql.="'".$objAlcalde[5]."',";
		$variableSql.="'".$objAlcalde[6]."',";
		$variableSql.="'".$objAlcalde[7]."',";
		$variableSql.="'".$objAlcalde[8]."');";
		return consultaA($con, $variableSql);

		}

		public function modificarDatos($con,$objAlcalde) {
		$variableSql = "UPDATE inscrip_alcalde SET ";
		$variableSql .= "nombre = '".$objAlcalde[1]."'";
		$variableSql .= " ,apellido = '".$objAlcalde[2]."'";
		$variableSql .= " ,dui = '".$objAlcalde[3]."'";
		$variableSql .= " ,genero = '".$objAlcalde[4]."'";
		$variableSql .= " ,direccion = '".$objAlcalde[5]."'";
		$variableSql .= " ,partido = '".$objAlcalde[6]."'";
		$variableSql .= " ,id_depa = '".$objAlcalde[7]."'";
		$variableSql .= " ,id_muni = '".$objAlcalde[8]."'";
		$variableSql .= " WHERE id = ".$objAlcalde[0].";";
		return consultaA($con, $variableSql);

		}
}
?>