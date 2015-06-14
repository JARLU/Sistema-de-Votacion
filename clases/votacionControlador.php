<?php
class VotacionControlador extends Votacion{
   
    public function guardarDatos($con,$objAlumno) {
        $variableSql = "INSERT INTO voto ";
        $variableSql .= "(id,nombre_partido,candidatura,codigo_depa,codigo_muni) ";
        $variableSql .= "VALUES (";
        $variableSql.="'".$objAlumno[0]."',";
        $variableSql.="'".$objAlumno[1]."',";
        $variableSql.="'".$objAlumno[2]."',";
        $variableSql.="'".$objAlumno[3]."',";
        $variableSql.="'".$objAlumno[4]."');";        
        return consultaA($con, $variableSql);
        
        }

        
    }