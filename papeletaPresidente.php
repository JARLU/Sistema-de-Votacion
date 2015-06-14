<?php include './clases/Coneccion.php';?>

<?php
session_start();

if(isset($_SESSION['barra'])) {?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta property="og:title" content="Simulador de votación"/>
<title>Votos para Presidentes</title>

<link href="./css/estilos.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
<script language="JavaScript">
    function nobackbutton(){    
        window.location.hash="no-back-button";   
        window.location.hash="Again-No-back-button" //chrome 
        window.onhashchange=function(){window.location.hash="no-back-button";}   
    }
    </script>



<style type="text/css">

 
.bloque{
  position: relative;
  display: inline-block;
  margin: auto 0;
  margin-left: 45px;
  margin-right: 45px;
  padding: 10px 0px 0 10px;

}


ul,ol {
      list-style: none;
    
      }

div > li > img {
  float: left;
}


</style>

</head>
<body onload="nobackbutton();" class="inicio">

<header>

<p><font size="+3">Elecciones Presindenciales</font></p>
</header>
 <div>
 
    <?php

 $sql = 'SELECT * FROM inscri_partido';
        $datoss =  consultaD($con, $sql);
//var_dump($datoss);
foreach ($datoss as $key)
  
/*$_REQUEST['var1'];
$_REQUEST['var2'];
$_REQUEST['var3'];*/

 {
 
    print(' 
      
        <div class="bloque">
         <form action="manejadorPresidentes.php?accion=save" method="post">
         <input type="hidden" name="var1" value="'.$_REQUEST['var1'].'">
         <input type="hidden" name="var2" value="'.$_REQUEST['var2'].'">
         <input type="hidden" name="var3" value="'.$_REQUEST['var3'].'">
            <div>
            <input type="hidden" name="candidatura" value="Presidentes">
            </div>
            <input type="hidden" name="voto" value='.$key['nombre_partido'].'>
            <img src='.$key['bandera'].'  width="200" height="150" /><br>
            <input type="submit" name="bot" value="Votar" class="btn btn-primary">
            </form>
          </div>
      
            ');
            

 }

?>
        
<br><br><br>
</body>
</html>
 <?php }else{
    header("Location:Votar.php");
 } ?>
 