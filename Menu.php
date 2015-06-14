<?php session_start(); ?>
<?php 
    if (isset($_SESSION['usuario'])) {
        
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="es-sv" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link rel="stylesheet" type="text/css" href="css/estiloss.css"/>
<title>Menu Principal</title>
<script language="JavaScript">
    function nobackbutton(){    
        window.location.hash="no-back-button";   
        window.location.hash="Again-No-back-button" //chrome 
        window.onhashchange=function(){window.location.hash="no-back-button";}   
    }
</script>
<style type="text/css">
.auto-style1 {
	text-align: center;
	font-size: xx-large;
}
.auto-style2 {
	text-align: center;
	font-size: large;
}
.auto-style3 {
	font-size: x-large;
}
.auto-style4 {
	text-align: center;
	font-size: xx-large;
	margin-left: 111px;
}
</style>

<style type="text/css">
			
			
			#header {
			position:absolute;
				margin:auto;
				width:500px;
				font-family:Arial, Vernada, Tahoma;
				
			}
			
			ul, ol {
				list-style:none;
			}
			
			.nav > li {
				float:right;
			}
			
			.nav li a {
				background-color:#819FF7;
				color:white;
				text-decoration:none;
				padding:10px 12px;
				display:block;
			}
			
			.nav li a:hover {
				background-color:#434343;
			}
			
			.nav li ul {
				display:none;
				position:absolute;
				min-width:140px;
				float:right;

			}
			
			.nav li:hover > ul {
				display:block;
			}
			
			
		.auto-style5 {
	text-align: center;
}
			
			
		</style>

</head>

<body onload="nobackbutton();" style="background-image: url('css/windows-7-azul-oscuro.jpg'); background-attachment: fixed">

<div id="header" style="width: 143px; left: -70px; top: -9px;">
			<ul class="nav">
				<li><a href=""><b>USUARIO</b></a>
					<ul>
						<li><a href=""><b>PERFIL</b></a></li>
						<li><a href="MenuPrincipal.php"><b>INICIO</b></a></li>
						<li><a href="./ayuda/index.php"><b>AYUDA</b></a></li>
						<li><a href="cerrar.php"><b>CERRAR SESION</b></a></li>
						<li><a href="MenuPrincipal.php"><b>FINALIZAR REGISTRO</b></a></li>
					</ul>
				</li>
			</ul>
</div>


<div class="container">
<div id="slider" style="left: 0px; top: 0px; height: 94px">
<div id="textoT" class="auto-style1" style="left: 36px; top: 37px; height: 35%; width: 89%">

	<strong>SISTEMA DE VOTACION
	<hr></hr>
	</strong></div>
</div>
<div id="contenido" class="auto-style2" style="left: 0px; top: 13px">
<div id="textoT0" class="auto-style4" style="left: 36px; top: 37px; height: 15%; width: 67%">

	<strong><span class="auto-style3">PANEL DE MENU</span>
	<hr></hr>
	<br />
	</strong></div>
	<div id="textob" style="height: 340px; width: 309px; left: 10px; top: 76px;">
	
	<a href="registroPartido.php"><input type="submit" value="Registrar Partido" id="submit" name="submit"/>
	<a href="registroDiputados.php"><input type="submit" value="Registrar Diputado" id="submit" name="submit"/>
	<a href="registroPresidente.php"><input type="submit" value="Registrar Presidente" id="submit" name="submit"/>
	
	</div>
	<div id="textob2" style="left: 356px; top: 75px; height: 342px; width: 311px">
	
	<a href="registroVotante.php"><input type="submit" value="Registrar Votante" id="submit" name="submit"/></a>
	<a href="registroAlcaldes.php"><input type="submit" value="Registrar Alcalde" id="submit" name="submit"/></a>
	<a href=""><input type="submit" value="Registrar Usuario" id="submit" name="submit"/></a>

	
	</div>
</div>

<div id="pie" class="auto-style5" style="left: 0px; top: 26px">
	<strong>ITCA Fepade Regional Zacatecoluca<br>
		<b>Sistema de Votaciones</b>
</strong>
</div>


</div>

</body>

</html>
 <?php }else{
    header("Location:index.php");
 }
 ?>
