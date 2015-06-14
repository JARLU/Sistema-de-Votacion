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

$accion= $_REQUEST['accion'];
switch ($accion) {
    case 'save':

    $ruta="imagen";
    @$archivo=$_FILES['bandera']['tmp_name'];
    @$nombreArchivo=$_FILES['bandera']['name'];
    move_uploaded_file($archivo,$ruta."/".$nombreArchivo);
    $ruta=$ruta."/".$nombreArchivo;

        if(isset($_REQUEST['bot'])){
            $partidoA->setId('NULL');
            $partidoA->setNombre_partido($_REQUEST['nombre_partido']);
            $partidoA->setBandera($ruta);
            $partidoA->setDui($_REQUEST['dui']);
            $partidoA->setRepresentante($_REQUEST['representante']);
            $datosObj=array($partidoA->getId(),
                            $partidoA->getNombre_partido(),
                            $partidoA->getBandera(),
                            $partidoA->getDui(),
                            $partidoA->getRepresentante());
             print $partidoA->guardarDatos($con,$datosObj);
             print '<a href=\'manejadorPartido.php?accion=con\'>Ver datos</a>';
        }else{
            print 'No se ha enviado datos ';
        }
         break;
     case 'con':
        $sql = 'SELECT * FROM inscri_partido';
        $datoss = consultaD($con, $sql);

        print imprimetabla($datoss, "inscri_partido","table table-bordered table-striped",1);
        break;
        default:
        print 'No hay Accion que Realizar';
    }
?>
    </body>
</html>