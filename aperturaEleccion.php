<?php session_start(); ?>
<?php 
    if (isset($_SESSION['usuario'])) {
        
 ?>
<?php include './clases/Coneccion.php';?>
<?php
$conexion = new mysqli('127.0.0.1', 'root', '', 'sistemavotacion');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Nueva Elección</title>
<script src="js/skel-layers.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/estilos.css"/>
<script src="./js/validacion_text_y_num.js"></script>
<script src="./js/jquery.validate.min.js"></script>
<script src="./js/jquery.messages.min.js"></script>
<script src="./js/skel-layers.min.js"></script>
<script language="javascript" src="js/jquery.js"></script>
<link rel="stylesheet" href="./libs/bootstrap/css/bootstra.css">
<link rel="stylesheet" type="text/css" href="css/estilos.css"/>
<link href="calendario_dw/calendario_dw-estilos.css" type="text/css" rel="STYLESHEET">

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
		<div id="slider">
			<div><center><img src="css/sistema.JPG" width="600" height="250"></center></div>
			</div>
		<div id="button" class="auto-style1" style="left: 0px; top: -4px; height: 50px">
			<ul id="button">
				
			</ul>
		</div>
	<center>
	<table>
	<h1>Nueva Elección</h1>
	<form mane="Nueva Eleccion" action="manejadorApertura.php?accion=save" method="post" id="registro">
		<table>
		<tr>
			<td><input type="checkbox" class="required form-control" name="presidencial" value="presidencial" style="width:40" title="¿¿Seleccionar...??"></td>
			<td width="150"><font size="3">Presidencial</font></td>
		</tr>
		<tr>
			<td><input type="checkbox" class="required form-control"  style="width:40" name="diputados" value="Diputados" title="¿¿Seleccionar...??"></td>
			<td width="150"><font size="3">Diputados</font></td>
		</tr>
		<tr>
			<td><input type="checkbox" class="required form-control" style="width:40" name="alcaldes" value="Alcaldes" title="¿¿Seleccionar...??"></td>
			<td width="150"><font size="3">Alcaldes</font></td>
		</tr>
		<tr>
			<td><font size="3">Año:</font></td>
			<td><select name="anio" style="width:120" class="required form-control" title="Selecione una de estas opciones"  required autocomplete="on">
				<option value="">Seleccionar</option>
				<option value="2015">2015</option>
				<option value="2016">2016</option>
				<option value="2017">2017</option>
				<option value="2018">2018</option>
				<option value="2019">2019</option>
				<option value="2020">2020</option>
			</select></td>
		</tr>
		<tr>
			<td><center><input type="submit" name="bot" value="Registrar" class="google" title="Clic Para Registrar"></center></td>
			<td><center><input type="reset" name="" value="Borrar" class="google" title="Cancelar"></center></td>
		</tr>
		</table>
	</form>
	</center>
	</table>
</div>
</body>
</html>
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
  <?php }else{
    header("Location:index.php");
 } ?>