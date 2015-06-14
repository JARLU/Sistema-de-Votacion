<?php
$con = mysqli_connect('192.168.10.10',
    'homestead','secret') or die(mysql_error());


if(isset($_POST['usuario']) && !empty($_POST['usuario']) &&
    isset($_POST['clave']) && !empty($_POST['clave'])
){

    $user=$_POST['usuario'];
    $pass=$_POST['clave'];

  $sql="select * from sqlinjeccion.registro 
    where usuario='$user' && clave='$pass'";

    $result=mysqli_query($con,$sql) 
    or die("Ocurrio un error al hacer la consulta");


    $row=mysqli_fetch_array($result);
    if($row){
        echo "Bienvenido <b>".$row['usuario']."</b>";
        echo "<br>Tu password es:<b>".$row['clave']."</b>";
      //var_dump($sql);
        // 'OR''='
    }else
    {
        echo "Usuario o Password No valido";
    }
}
else
    echo "Algun campo esta vacio";
?>