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

<body style="background-image: url('css/windows-7-azul-oscuro.jpg'); background-attachment: fixed">

<div id="header" style="width: 143px; left: -70px; top: -9px;">
			<ul class="nav">
				<li><a href=""><b>USUARIO</b></a>
					<ul>
						<li><a href=""><b>PERFIL</b></a></li>
						<li><a href="MenuPrincipal.php"><b>INICIO</b></a></li>
						<li><a href="./ayuda/index.php"><b>AYUDA</b></a></li>
						<li><a href="cerrar.php"><b>CERRAR SESION</b></a></li>
					</ul>
				</li>
			</ul>
</div>


<div class="container">
<div id="slider" style="left: 0px; top: 0px; height: 94px">
<div id="textoT" class="auto-style1" style="left: 36px; top: 37px; height: 35%; width: 89%">

	<strong>SISTEMA DE VOTACIÓN
	<hr></hr>
	</strong></div>
</div>
<div id="contenido" class="auto-style2" style="left: 0px; top: 13px">
<div id="textoT0" class="auto-style4" style="left: 36px; top: 37px; height: 15%; width: 67%">

	<strong><span class="auto-style3">PANEL DE MENU</span>
	<hr></hr>
	<br />
	</strong></div>
	<tr>
		<td width="500">Resultados Presidenciales:</td>
		<td><a href="./reporte/reportePresidencial.php">Presidencial</a><br><br></td>
	</tr>
	<tr>
		<td width="500">Resultados de Alcaldes:</td>
		<td><a href="./reporte/reporteAlcaldes.php">Alcaldes</a><br><br></td>
	</tr>
	<tr>
		<td width="500">Estado de Diputados:</td>
		<td><a href="./reporte/reporteDiputados.php">Diputados</a><br><br></td>
	</tr>
	<a href="#" title="Sistema de Votacion EL SALVADOR"><img src="css/sistema.JPG" width="600" height="250"></a>
	</div>

<div id="pie" class="auto-style5" style="left: 0px; top: 26px">
	<strong>ITCA Fepade Regional Zacatecoluca<br>
		<b>Sistema de Votaciones</b>
</strong>
</div>
</div>
</div>
</body>
</html>
 <?php }else{
    header("Location:index.php");
 }
 ?>
