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
<title>Registro Diputados</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<script src="./js/validacion_text_y_num.js"></script>
<script src="./js/jquery.validate.min.js"></script>
<script src="js/skel-layers.min.js"></script>
<script src="./libs/validacion/messages.js"></script>
<script language="javascript" src="js/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="css/estilos.css"/>
<link rel="stylesheet" href="./libs/bootstrap/css/bootstra.css">
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
<script languaje="javascript">

function habilita(form)
{
form.partido.disabled=false;
}

function deshabilita(form)
{
form.partido.disabled=true;
}

function submitForm(form){
oForm = window.document.forms[form];
formLen    = oForm.elements.length

  for (i=0; i<formLen; i++)
  {
    switch (oForm.elements[i].type)
    {
      case 'radio':
      if (oForm.elements[i].checked)
        if (oForm.elements[i].value != 'Partido'){
          valor = oForm.elements[i].value;
          document.forms[form].partido2.value = valor;
        }
        else
        {
        if (document.forms['habilitar'].partido.value != '' && document.forms['habilitar'].partido.value!=0)
              {
      valor = document.forms['habilitar'].partido.value;
      document.forms[form].partido2.value = valor;
              }
        else{
          alert('Debe seleccionar un tipo de candidatura');
          return false
        }
      }
      break;
      
    }
  }
  window.document.forms[form].submit()
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
<body onload="javascript:document.forms[0].partidario.disabled=true;" id="candidato">
	<div class="container" style="height: 600px">
	<center>
	<table>
	<h1>Inscripción de Diputados</h1>
	<form name="Registro Diputados" id="registro" class="required form-control" action="manejadorDiputado.php?accion=save" method="post" id="registro" class="pager">
		<table>
		<tr>
			<td width="120">Nombres:</td>
			<td><input type="tex" name="nombres" class="required form-control" style="width:180" title="Ingrese los Nombres" required autocomplete="on"></td>
		</tr>
		<tr>
			<td width="120">Apellidos:</td>
			<td><input type="tex" name="apellidos" class="required form-control" style="width:180" title="Ingrese los Apellidos" required autocomplete="on"></td>
		</tr>
    <tr>
      <td width="120">N° de DUI:</td>
      <td><input type="text" name="dui" onkeyup="mascara(this,'-',patron3,true)" onkeypress="return justNumbers(event);" maxlength="10" class="required form-control" title="Ingrese el Numero de DUI" style="width:180" required autocomplete="on" placeholder="00000000-0"></td>
    </tr>
    <tr>
      <td width="120">Dirección:</td>
      <td><textarea name="direccion" class="required form-control" title="Ingrese su Dirección" style="width:180" required autocomplete="on"></textarea></td>
    </tr>
		<tr>
			<td>Candidatura:</td>
			<td style="border=1">Partidario<input type="radio" onClick="habilita(this.form)" name="candidatura" value="Partido" title="Seleccionar si va por PARTIDO" required autocomplete="on">
				Coalision<input type="radio" onClick="deshabilita(this.form)" name="candidatura" value="Coalision" title="Seleccionar si va por COALISION">
				Independiente<input type="radio" onClick="deshabilita(this.form)" name="candidatura" value="Independiente" title="Seleccionar si es INDEPENDIENTE">
			</td>
			</td>
		</tr>
		<tr>
			<td>Partido:</td>
			<td><select style="width:180" class="required form-control" title="Selecionar Partido" name="partido">
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
			<td>Coalision</td>
			<td><select style="width:180" title="Selecionar Partidos" id="depto" name="coalision" class="required form-control">
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
			<td>Departamento:</td>
			<td><select name="departamento" style="width:180" id="depto" class="required form-control" onkeydown="return validarLetras(event)" required="true" title="Selecionar Departamento">
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
			<td><center><input type="submit" name="bot" value="Registrar" class="google" title="Clic Para Registrar" ></center></td>
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