<?php session_start(); ?>
<?php 
    if (isset($_SESSION['usuario'])) {
        
 ?>
<?php include './clases/Coneccion.php';?>
<?php
$conexion = new mysqli('127.0.0.1', 'root', '', 'sistemavotacion');
?>
<pre>
<?php  
$sql ="SELECT * FROM inscrip_presidente WHERE id ='".$_REQUEST['id']."';";
        $datos= consultaD($con, $sql,3)
       ?>
      
       </pre>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registro Presidentes</title>
<script src="js/skel-layers.min.js"></script>
<link rel="stylesheet" href="./libs/bootstrap/css/bootstra.css">
<link rel="stylesheet" type="text/css" href="css/estilos.css"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<script src="./js/validacion_text_y_num.js"></script>
<script src="./js/jquery.validate.min.js"></script>
<script src="js/skel-layers.min.js"></script>
<script src="./libs/validacion/messages.js"></script>
<script language="javascript" src="js/jquery.js"></script>

<style type="text/css">
.auto-style1 {
	text-align: center;
	font-size: medium;
}
.auto-style2 {
	text-align: left;
	margin-bottom: 1;
	font-size: 12.0pt;
	line-height: 115%;
	font-family: Arial;
	color: #FFFFFF;
}
p
	{margin-right:0cm;
	margin-left:0cm;
	font-size:12.0pt;
	font-family:"Times New Roman","serif";
	}
.auto-style3 {
	font-size: xx-large;
}
.auto-style4 {
	font-size: x-large;
}
.auto-style5 {
	border-width: 0px;
}
.auto-style6 {
	font-family: Arial;
	color: #FFFFFF;
}
.auto-style7 {
	text-align: center;
}
.auto-style8 {
	text-decoration: underline;
	font-size: large;
}

.google {
  padding: 6px 10px;
  -webkit-border-radius: 2px 2px;
  border-radius: 2px 2px;
  border: solid 1px rgb(153, 153, 153);
  background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(rgb(255, 255, 255)), to(rgb(221, 221, 221)));
  background: gradient(linear, 0% 0%, 0% 100%, from(rgb(255, 255, 255)), to(rgb(221, 221, 221)));
  color: #333;
  text-decoration: none;
  cursor: pointer;
  display: inline-block;
  text-align: center;
  text-shadow: 0px 1px 1px rgba(255,255,255,1);
  -webkit-text-shadow: 0px 1px 1px rgba(255,255,255,1);
  line-height: 1;
  cursor: pointer;
  margin-top: 10px;
  margin-bottom: 15px;

}
div.menu
{
    padding: 4px 0px 4px 8px;
}

div.menu ul
{
    list-style: none;
    margin: 0px;
    padding: 0px;
    width: auto;
}

</style>
</head>

<body >
	<div class="container" style="height: 600px">
	<center>
	<table>
	<h1>Inscripción de Presidentes</h1>
	<form name="Presidente" action="modificarPresidente.php" method="post" id="registro">
		<table>
		<tr><input type="hidden" name="id" 
                    value='<?php print $datos[0][0]?>'>
        </tr>
		<tr>
			<td width="120"><font size="3">Nombres:</font></td>
			<td><input type="tex" name="nombre" class="required form-control" style="width:180" title="Ingrese los Nombres" required autocomplete="on" value='<?php print $datos[0][1]?>'></td>
		</tr>
		<tr>
			<td width="120"><font size="3">Apellidos:</font></td>
			<td><input type="tex" name="apellido" class="required form-control" style="width:180" title="Ingrese los Apellidos" required autocomplete="on" value='<?php print $datos[0][2]?>'></td>
		</tr>
		<tr>
			<td width="120"><font size="3">N° de DUI:</font></td>
			<td><input type="text" name="dui" class="required form-control" onkeydown="return validarNumeros(event)"  maxlength="10" title="Ingrese el Numero de DUI" style="width:180" required autocomplete="on" placeholder="00000000-0" value='<?php print $datos[0][3]?>'></td>
		</tr>
		<tr>
			<td width="120"><font size="3">Dirección:</font></td>
			<td><textarea name="direccion" class="required form-control" title="Ingrese su Dirección" style="width:180" required autocomplete="on" value='<?php print $datos[0][4]?>'></textarea></td>
		</tr>
		<tr>
			<td><font size="3">Candidatura:</font></td>
			<td><select name="candidatura" class="required form-control" title="Selecione una de estas dos opciones" required autocomplete="on" value='<?php print $datos[0][5]?>'>
				<option value="">Seleccionar...</option>
				<option value="Endependiente">Independiente</option>
				<option value="Partidario">Partidario</option>
			</select></td>
		</tr>
		<tr>
			<td><font size="3">Partido:</font></td>
			<td><select style="width:180" name="partido" class="required form-control" style="width:180" title="Selecionar Partido" required autocomplete="on" id="depto" value='<?php print $datos[0][6]?>'>
				<option value="">Seleccionar...</option>
				<?php
                  $result = $conexion->query("SELECT * FROM inscri_partido");
                  if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                  echo '<option value="'.$row['id'].'">'.utf8_encode($row['nombre_partido']).'</option>';
                  }
                }
                  ?>
			</select>
			</td>
		</tr>
		<tr>
			<td><center><input type="submit" name="bot" value="Registrar" class="google" title="Clic Para Registrar"></center></td>
			<td><center><input type="submit" name="" value="Cancelar" class="google" title="Cancelar"></center></td>
		</tr>
		</table>
	</form>
	</center>
	</table>
</div>
<script language="javascript">
    $(document).ready(function(){
        $("#depto").change(function () {
            $("#depto option:selected").each(function () {
                id_depto = $(this).val();
                $.post("municipios.php", { id_depto: id_depto }, function(data){
                    $("#municipio").html(data);
                });
            });
        })
    });
</script>
<script type="text/javascript">
    $().ready(function () {
    	$("#registro").validate({});
    });
    $(document).ready(
        function(){
            $("#fechac").datepicker(
                {
                	changeMonth: true,
                	changeYear: true,
                	dateFormat: "yy-mm-dd",
                	showAnim: 'slide'
                }
            );
        }
    )
</script>
</body>
</html>
  <?php }else{
    header("Location:index.php");
 } ?>