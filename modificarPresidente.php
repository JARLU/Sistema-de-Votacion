<?php session_start(); ?>
<?php 
    if (isset($_SESSION['usuario'])) {
        
 ?>

<html>
    <head>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
    <script src="./libs/jquery-2.1.0.js"></script>
    <link rel="stylesheet" href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
    <script src="./libs/validacion/jquery.validate.min.js"></script>
    <script src="./libs/validacion/messages.js"></script>
    <script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
    </head>
    <body>
<?php
include './clases/Coneccion.php';
include './clases/presidente.php';
include './clases/PresidenteControlador.php';

$presidenteA = new PresidenteControlador();

if(isset($_REQUEST['bot'])){
     $presidenteA->setId('id');
     $presidenteA->setNombre($_REQUEST['nombre']);
     $presidenteA->setApellido($_REQUEST['apellido']);
     $presidenteA->setDui($_REQUEST['dui']);
     $presidenteA->setDireccion($_REQUEST['direccion']);
     $presidenteA->setCandidatura($_REQUEST['candidatura']);
     $presidenteA->setPartido($_REQUEST['partido']);
     $datosObj=array($presidenteA->getId(),
                     $presidenteA->getNombre(),
                     $presidenteA->getApellido(),
                     $presidenteA->getDui(),
                     $presidenteA->getDireccion(),
                     $presidenteA->getCandidatura(),
                     $presidenteA->getPartido());
    print "<div id='dialogo' title='Exito' style='display: none;'>";
    print '<p>Mensaje: ';
    print $presidenteA->modificarDatos($con,$datosObj);
    print '<span class="badge glyphicon glyphicon-ok"></span></p>';
    print '<a href=\'manejadorPresidente.php?accion=con\'>Ver datos</a>';
    print "</div>";
}
?><script>
$(document).ready(function(){
   $("#dialogo").dialog();
});
</script>
    </body>
    </html>
    <?php }else{
    header("Location:index.php");
 } ?>