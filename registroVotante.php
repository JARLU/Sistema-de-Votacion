<?php session_start(); ?>
<?php 
    if (isset($_SESSION['usuario'])) {
        
 ?>
<?php
$conexion = new mysqli('127.0.0.1', 'root', '', 'sistemavotacion');
?>
<?php include './clases/Coneccion.php';?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registro Votantes</title>
<script src="./js/validacion_text_y_num.js"></script>
<script src="./js/jquery.validate.min.js"></script>
<script src="./js/jquery.messages.min.js"></script>
<script src="./js/skel-layers.min.js"></script>
<script language="javascript" src="js/jquery.js"></script>
<link rel="stylesheet" href="./libs/bootstrap/css/bootstra.css">
<link rel="stylesheet" type="text/css" href="css/estilos.css"/>
<link href="calendario_dw/calendario_dw-estilos.css" type="text/css" rel="STYLESHEET">
<script type="text/javascript" src="calendario_dw/jquery-1.4.4.min.js"></script>
  <script type="text/javascript" src="calendario_dw/calendario_dw.js"></script>
  
  <script type="text/javascript">
  $(document).ready(function(){
    $(".campofecha").calendarioDW();
  })
</script>
<script type="text/javascript">

function justNumbers(e)
{
var keynum = window.event ? window.event.keyCode : e.which;
if ((keynum == 8) || (keynum == 46))
return true;
 
return /\d/.test(String.fromCharCode(keynum));
document.tree.miSelect.options[indice].text
}
var patron = new Array(2,2,4)
var patron2 = new Array(1,3,3,3,3)
var patron3 = new Array(8,1)
function mascara(d,sep,pat,nums){
if(d.valant != d.value){
  val = d.value
  largo = val.length
  val = val.split(sep)
  val2 = ''
  for(r=0;r<val.length;r++){
    val2 += val[r]  
  }
  if(nums){
    for(z=0;z<val2.length;z++){
      if(isNaN(val2.charAt(z))){
        letra = new RegExp(val2.charAt(z),"g")
        val2 = val2.replace(letra,"")
      }
    }
  }
  val = ''
  val3 = new Array()
  for(s=0; s<pat.length; s++){
    val3[s] = val2.substring(0,pat[s])
    val2 = val2.substr(pat[s])
  }
  for(q=0;q<val3.length; q++){
    if(q ==0){
      val = val3[q]
    }
    else{
      if(val3[q] != ""){
        val += sep + val3[q]
        }
    }
  }
  d.value = val
  d.valant = val
  }
}
</script>

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
		<div id="button" class="auto-style1" style="left: 0px; top: -4px; height: 50px">
		</div>
	<center>
	<table>
	<h1>Inscripción de Votantes</h1>
	<form action="manejadorVotante.php?accion=save" name="Registro Votante" method="post" id="registro" class="pager">
		<table>
		<tr>
			<td width="120"><font size="3">DUI:</font></td>
			<td><input type="text" name="dui" class="required form-control" onkeyup="mascara(this,'-',patron3,true)" style="width:300px;" onkeypress="return justNumbers(event);"  maxlength="10" placeholder="00000000-0" style="width:180" title="Ingrese N° de DUI" required autocomplete="on" onkeydown="return validarNumeros(event)"></td>
		</tr>
		<tr>
			<td width="120"><font size="3">Nombres:</font></td>
			<td><input type="text" name="nombre" class="required form-control" onkeypress="return sololetras(event)" onpaste="return false" placeholder="Ingrese Sus Nombres" style="width:180" title="Ingrese los Nombres" required autocomplete="on"></td>
		</tr>
		<tr>
			<td width="120"><font size="3">Apellidos:</font></td>
			<td><input type="text" name="apellido" class="required form-control" onkeydown="return validarLetras(event)" placeholder="Ingrese Sus Apellidos" style="width:180" title="Ingrese los Nombres" required autocomplete="on"></td>
		</tr>
		<tr>
			<td width="120"><font size="3">Foto:</font></td>
			<td><input type="File" name="foto" required="true"></td>
		</tr>
		<tr>
			<td width="120"><font size="3">Genero:</font></td>
			<td>Masculino<input type="radio" name="genero" value="Masculino" title="Seleccionar si es Hombre" required autocomplete="on">
				Femenino<input type="radio" name="genero" title="Seleccionar si es Mujer">
			</td>
		</tr>
		<tr>
			<td width="150"><font size="3">Fecha de Vencimiento:</font></td>
			<td><input type="text" name="fechavenci" id="fechac" class="campofecha">
			</td>
		</tr>
		<tr>
			<td width="120"><font size="3">Dirección:</font></td>
			<td><textarea name="direccion" minlength="2" placeholder="Ingrese Su Dirección" class="required form-control" minlength="2" required autocomplete="on" onkeydown="return validarLetras(event)"></textarea></td>
		</tr>
		<tr>
			<td width="120"><font size="3">Departamento:</font></td>
			<td><select name="id_depa" id="depto" width="120" class="required form-control" required="true" onkeydown="return validarLetras(event)">
					<option value="">Seleccionar...</option>
				  <?php
                  $result = $conexion->query("SELECT * FROM departamentos");
                  if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                  echo '<option value="'.$row['codigo'].'">'.utf8_encode($row['nombre']).'</option>';
                  }
                }
                  ?>
				</select>
			</td>
		</tr>
		<tr>
			<td width="120"><font size="3">Municipio:</font></td>
			<td><Select name="id_muni" id="municipio" class="required form-control" onkeydown="return validarLetras(event)">
				<option value="">Seleccionar...</option>
			</select></td>
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
