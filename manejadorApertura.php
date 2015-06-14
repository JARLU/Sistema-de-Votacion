<html>
    <head>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registrado</title>
    <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
    <script src="./libs/jquery-2.1.0.js"></script>
    <link rel="stylesheet" href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
    <script src="./libs/validacion/jquery.validate.min.js"></script>
    <script src="./libs/validacion/messages.js"></script>
    <script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
    <script language="JavaScript">
    function nobackbutton(){    
        window.location.hash="no-back-button";   
        window.location.hash="Again-No-back-button" //chrome 
        window.onhashchange=function(){window.location.hash="no-back-button";}   
    }
    </script>
    </head>
    <body onload="nobackbutton();">
<?php
include './clases/Coneccion.php';
include './clases/apertura.php';
include './clases/AperturaControlador.php';

$aperturaA = new AperturaControlador();

$accion= $_REQUEST['accion'];
switch ($accion) {
    case 'save':
        if(isset($_REQUEST['bot'])){
            $aperturaA->setId('NULL');
            $aperturaA->setPresidencial($_REQUEST['presidencial']);
            $aperturaA->setDiputados($_REQUEST['diputados']);
            $aperturaA->setAlcaldes($_REQUEST['alcaldes']);
            $aperturaA->setAnio($_REQUEST['anio']);
            $datosObj=array($aperturaA->getId(),
                            $aperturaA->getPresidencial(),
                            $aperturaA->getDiputados(),
                            $aperturaA->getAlcaldes(),
                            $aperturaA->getAnio());
            print $aperturaA->guardarDatos($con,$datosObj);
            print '<a href=\'manejadorApertura.php?accion=con\'>Ver datos</a>';
        }else{
            print 'No se ha enviado datos ';
        }
         break;
     case 'con':
         $sql = 'SELECT * FROM apertura';
         $datoss = consultaD($con, $sql);

         print imprimetabla($datoss,"apertura","table table-bordered table-striped",1);
        break;
        default:
        print 'No hay Accion que realizar';
        break;
    }
?>
    </body>
    </html>