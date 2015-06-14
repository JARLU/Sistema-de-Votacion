<?php
$conexion = new mysqli('127.0.0.1','sistemavotacion');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script language="javascript" src="js/jquery.js"></script>
</head>
<body>
<form action="algo" method="get">
Departamento: <select name="depto" id="depto">
    <option value="">--------</option>
    <?php
    $result = $conexion->query("SELECT * FROM departamentos");
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<option value="'.$row['codigo'].'">'.utf8_encode($row['nombre']).'</option>';
        }
    }
    ?>


</select>
<br>
Municipio: <select name="municipio" id="municipio">
    <option value="">------</option>
</select>
    <button type="submit">Enviar</button>
</form>
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
</body>
</html>
