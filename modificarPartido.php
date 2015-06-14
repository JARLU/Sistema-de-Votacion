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
include './clases/partido.php';
include './clases/PartidoControlador.php';

$partidoA = new PartidoControlador();

if(isset($_REQUEST['bot'])){
           $partidoA->setId($_REQUEST['id']);
           $partidoA->setNombre_partido($_REQUEST['nombre_partido']);
           $partidoA->setBandera($_REQUEST['bandera']);
           $partidoA->setDui($_REQUEST['dui']);
           $partidoA->setRepresentante($_REQUEST['representante']);
           $datosObj=array($partidoA->getId(),
                           $partidoA->getNombre_partido(),
                           $partidoA->getBandera(),
                           $partidoA->getDui(),
                           $partidoA->getRepresentante());
           print "<div id='dialogo' title='Exito' style='display: none;'>";
           print '<p>Mensaje: ';
           print $partidoA->modificarDatos($con,$datosObj);
           print '<span class="badge glyphicon glyphicon-ok"></span></p>';
           print '<a href=\'manejadorPartido.php?accion=con\'>Ver datos</a>';
            print "</div>";
        }
?><script>
$(document).ready(function(){
   $("#dialogo").dialog();
});
</script>
    </body>
</html>