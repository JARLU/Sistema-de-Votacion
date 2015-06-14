<?php include './clases/Coneccion.php';?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta property="og:title" content="Simulador de votación"/>
<title>Sistema de votación</title>

<link href="./css/estilos.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
<script src="./libs/jquery-2.10.js"></script>
<link rel="stylesheet" href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
<script src="./libs/validacion/jquery.validate.min.js"></script>
<script src="./libs/validacion/jquery.messages.min.js"></script>
<script src="./js/validacion_text_y_num.js"></script>
<script src="./js/jquery.validate.min.js"></script>
<script src="./js/jquery.messages.min.js"></script>
<script src="./js/skel-layers.min.js"></script>
<script language="javascript" src="js/jquery.js"></script>
<link rel="stylesheet" href="./libs/bootstrap/css/bootstra.css">
<link href="calendario_dw/calendario_dw-estilos.css" type="text/css" rel="STYLESHEET">
<script> 
if (history.forward(1)){location.replace(history.forward(1))} 
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

<script>
    texto="";

     var Tletras=new Array ("0","1","2","3","4","5","6","7","8","9","-");
     var z=0;
     var Numero=true
     var Guion=new Array("-");

     function anadir(letra){
  texto=document.f.barra.value;
  if(letra=="\b"){
  numeroLetras=texto.length-1
  texto=texto.substring(0,numeroLetras);
  }
  else{
  if(!Numero){letra=letra.toLowerCase()}
  texto=texto+letra;
  }
  document.f.barra.value=texto;
  }
  function mostrar(){
  if (z==0){z=1;document.getElementById('botones').style.visibility="visible";pregunta.innerHTML="Ocultar teclado";}
  else {z=0;document.getElementById('botones').style.visibility="hidden";pregunta.innerHTML="Mostrar teclado";}
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


<header>
<h1>Sistema de Votacion<br>
<span>El Salvador</span></h1>
<p></p>
</header>
 
<body>
<form action="sesionDui.php" method="post" name="f">
<br><br>
<center>
<div style="width:300px">
  <div>
   DUI:
  </div>
  <div>
<input type="Text"  name="barra" onkeyup="mascara(this,'-',patron3,true)" onkeypress="return justNumbers(event);"  style="width:200px;" class="required form-control" maxlength="10" required="true" title="INGRESE SU NUMERO DE DUI" placeholder="00000000-0">
</div>

  <?php if (isset($_REQUEST['msg'])) { ?>
                    
                    <div class="row">
                        <div class="col-xs-4"></div>
                        
                        <div class="col-xs-2">
                        
                            <div class='label alert-danger'>
                            <?php  print "DUI NO REGISTRADO O YA <br>HA EMITIDO SUFRAGIO...!!!";?> 
                            </div>
                          
                        </div>

                    </div>
                    
                    <br>
                    <?php }  ?>

<br>
<center><input type="submit" name='bot' value="Entrar" class="google" title="Votar"></center><br>
<a id="pregunta" href=javascript:mostrar()>Mostrar teclado</a><br>

<br>
<br>
<div align=center id="botones" style="font:normal 16px/12px verdana;visibility:hidden;" class="google" ></div>


<script>
var c="0";
var letras="";
var p=0;
for (a=0;a<Tletras.length;a++){
letras=letras+"<input style='width:80px;' type='Button' value="+Tletras[a]+" onclick=anadir('"+Tletras[a]+"')>&nbsp;";
p=p+1;
if(p==10){p=0;letras=letras+"<br><br>";}
}
document.getElementById('botones').innerHTML=letras+"<input style='width:40px;' alt='Borrar' type='Button' value=&laquo; onClick=anadir('\b')><br><font style='font:20px'></font>";
</script>
</div>
</center>
</form>
<footer id="footer">
  <font size="3">
  Create by
  <a href="#">José Ismael Arias Reyes</a>
  </font>
</footer> 
</body>
</html>
