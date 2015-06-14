<html>
    <head>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link href="./css/estilos.css" rel="stylesheet" type="text/css">
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
include './clases/votacion.php';
include './clases/votacionControlador.php';


$alumnoA = new VotacionControlador();

$accion= $_REQUEST['accion'];
switch ($accion) {
    case 'save':
       if(isset($_REQUEST['bot'])){
           $alumnoA->setId('NULL');
           $alumnoA->setSufragio($_REQUEST['voto']);
           $alumnoA->setCandidatura($_REQUEST['candidatura']);
           $alumnoA->setDepa($_REQUEST['var2']);
           $alumnoA->setMuni($_REQUEST['var3']);
           $datosObj=array($alumnoA->getId(),                      
                           $alumnoA->getSufragio(),
                           $alumnoA->getCandidatura(),
                           $alumnoA->getDepa(),
                           $alumnoA->getMuni());
           print $alumnoA->guardarDatos($con,$datosObj);
           header("Location:papeletaDiputados.php?var1=".$_REQUEST['var1']."&var2=".$_REQUEST['var2']."&var3=".$_REQUEST['var3']);
       }else{
           print 'No se ha enviado datos ';
       }
        break;
    case 'con':        
        $sql = 'SELECT * FROM voto';
        $datoss =  consultaD($con, $sql);
        break;
        default:
        print 'No hay Accion que realizar';
        break;
      }
 ?>  
     </body>
</html>