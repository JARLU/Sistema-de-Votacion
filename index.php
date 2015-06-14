<?php include './clases/Coneccion.php';?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Inicio Sesión</title>
<link rel="stylesheet" type="text/css" href="css/estilos.css"/>
<link rel="stylesheet" href="./libs/bootstrap/css/bootstra.css">
  <style>
    .container-fluid{
      width: 500px;
    }
  </style>
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
.google li a:hover{
	background-color: #2586d7;
	margin-top: -2px;
	padding-bottom: 12px;
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
<br><br>
<body class="inicio">
	<header>
		<br>
		<h1><font >Sistema de Elecciones</font><br>
		<span><b>El Salvador</b></span></h1>
	</header>
	<div  style="height: 600px">
	<center>
	<div class="container-fluid">
	<div class="panel panel-default">
    <div class="panel-heading">
    	<h3 class="panel-title"><font size="3">INICIAR SESIÓN</font></h3>
    </div>
     <div class="panel-body">
	<form mane="Inicio Sesion" action="sesion.php" method="post">
		<div class="row">
			<div class="col-xs-4"><b><i>Usuario:</i></b></div>
              <div class="col-xs-2">
              	<input type="tex" name="usuario" style="width:180" title="Ingrese nombre de Usuario" required autocomplete="on">
              </div>
            </div>
            <br>
			<div class="row">
              <div class="col-xs-4"><b><i>Clave:</i></b></div>
              <div class="col-xs-2">
                <input type="password" name="clave"  class="form controls">
              </div>
            </div>
            <br>
                    <?php if (isset($_REQUEST['msg'])) { ?>
                    <div class="row">
                        <div class="col-xs-4"></div>
                        <div class="col-xs-2">
                            <div class='label alert-danger'>
                               <?php  print "Error al inicio de sesion";?> 
                            </div>
                        </div>
                    </div>
                    <br>
                    <?php }  ?>
                    <div class="row">
              <div class="col-xs-4"></div>
              <center>
              <div class="col-xs-2">
                <input type="submit" name="bot" value="Entrar" class="google" title="Iniciar Sesion"></td>
              </div>
              </center>
            </div>
          </div>
	</div>
</div>
	</form>
	</center>
</div>
<footer id="footer">
</footer>
</body>
</html>

