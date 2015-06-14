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
include './clases/alcalde.php';
include './clases/AlcaldeControlador.php';

$alcaldeA = new AlcaldeControlador();

$accion= $_REQUEST['accion'];
switch ($accion) {
    case 'save':
        if(isset($_REQUEST['bot'])){
            $alcaldeA->setId('NULL');
            $alcaldeA->setNombre($_REQUEST['nombre']);
            $alcaldeA->setApellido($_REQUEST['apellido']);
            $alcaldeA->setDui($_REQUEST['dui']);
            $alcaldeA->setGenero($_REQUEST['genero']);
            $alcaldeA->setDireccion($_REQUEST['direccion']);
            $alcaldeA->setPartido($_REQUEST['partido']);
            $alcaldeA->setId_depa($_REQUEST['id_depa']);
            $alcaldeA->setId_muni($_REQUEST['id_muni']);
            $datosObj=array($alcaldeA->getId(),
                            $alcaldeA->getNombre(),
                            $alcaldeA->getApellido(),
                            $alcaldeA->getDui(),
                            $alcaldeA->getGenero(),
                            $alcaldeA->getDireccion(),
                            $alcaldeA->getPartido(),
                            $alcaldeA->getId_depa(),
                            $alcaldeA->getId_muni());
             print $alcaldeA->guardarDatos($con,$datosObj);
             print '<a href=\'manejadorAlcalde.php?accion=con\'>Ver datos</a>';
        }else{
            print 'No se ha enviado datos ';
        }
         break;
     case 'con':
        $sql = 'SELECT * FROM inscrip_alcalde';
        $datoss = consultaD($con, $sql);

        print imprimetabla($datoss, "inscrip_alcalde","table table-bordered table-striped",1);
        break;
        default:
        print 'No hay Accion que Realizar';
    }
?>
    </body>
</html>