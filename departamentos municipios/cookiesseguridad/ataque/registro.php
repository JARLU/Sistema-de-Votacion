<?php
/**
 * Created by PhpStorm.
 * User: alphyon
 * Date: 05-03-15
 * Time: 09:04 PM
 */
$con = mysqli_connect('192.168.10.10',
	'homestead','secret') or die(mysql_error());
$sql = "INSERT INTO sqlinjeccion.registro
        VALUES('".$_REQUEST['usuario']."',
        	'".($_REQUEST['clave'])."');";
//var_dump($sql);
if(mysqli_query($con,$sql)) echo 'OK';