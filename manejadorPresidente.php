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

$accion= $_REQUEST['accion'];
switch ($accion) {
    case 'save':
        if(isset($_REQUEST['bot'])){
            $presidenteA->setId('NULL');
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
            print $presidenteA->guardarDatos($con,$datosObj);
            print '<a href=\'manejadorPresidente.php?accion=con\'>Ver datos</a>';
        }else{
            print 'No se ha enviado datos ';
        }
         break;
     case 'con':
         $sql = 'SELECT * FROM inscrip_presidente';
         $datoss = consultaD($con, $sql);

         print imprimetabla($datoss,"inscrip_presidente","table table-bordered table-striped",1);
        break;
        default:
        print 'No hay Accion que realizar';
        break;
    }
?>
    </body>
    </html>