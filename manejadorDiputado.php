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
include './clases/diputado.php';
include './clases/DiputadoControlador.php';

$diputadoA = new DiputadoControlador();
$accion= $_REQUEST['accion'];
switch ($accion) {
    case 'save':
        if(isset($_REQUEST['bot'])){
            $diputadoA->setId('NULL');
            $diputadoA->setNombres($_REQUEST['nombres']);
            $diputadoA->setApellidos($_REQUEST['apellidos']);
            $diputadoA->setDui($_REQUEST['dui']);
            $diputadoA->setDireccion($_REQUEST['direccion']);
            $diputadoA->setCandidatura($_REQUEST['candidatura']);
            $diputadoA->setPartido($_REQUEST['partido']);
            $diputadoA->setCoalision($_REQUEST['coalision']);
            $diputadoA->setDepartamento($_REQUEST['departamento']);
            $datosObj=array($diputadoA->getId(),
                            $diputadoA->getNombres(),
                            $diputadoA->getApellidos(),
                            $diputadoA->getDui(),
                            $diputadoA->getDireccion(),
                            $diputadoA->getCandidatura(),
                            $diputadoA->getPartido(),
                            $diputadoA->getCoalision(),
                            $diputadoA->getDepartamento());
            print $diputadoA->guardarDatos($con,$datosObj);
            print '<a href=\'manejadorDiputado.php?accion=con\'>Ver datos</a>';
       }else{
           print 'No se ha enviado datos ';
       }
        break;
    case 'con':        
        $sql = 'SELECT * FROM inscrip_diputado';
        $datoss =  consultaD($con, $sql);

        print imprimetabla($datoss,"inscrip_diputado","table table-bordered table-striped",1);
        break;
        default:
        print 'No hay Accion que realizar';
        break;
      }
?>
    </body>
</html>