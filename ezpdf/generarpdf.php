<?php //DomPDF
require_once('class.ezpdf.php');
$pdf =& new Cezpdf('LETTER');
$pdf->selectFont('../fonts/courier.afm');
$pdf->ezSetCmMargins(1,1,1.5,1.5);

$titles = array('id'=>'<b>id</b>', 'Lenguaje'=>'<b>Lenguaje</b>');
$data = array(array('id'=>'1', 'concepto'=>'Php'),
			   array('id'=>'2', 'concepto'=>'Java'),
			   array('id'=>'3', 'concepto'=>'Visual .net'),
			   array('id'=>'4', 'concepto'=>'Ruby'),
			   array('id'=>'5', 'concepto'=>'Fox Pro'),
			   array('id'=>'6', 'concepto'=>'Python'));

$options = array('shadeCol'=>array(0.9,0.9,0.9), 'xOrientation'=>'center', 'width'=>500, 'fontSize'=>20);

$txttit = "<b>Reporte Lenguajes de programacion</b>\n";
$txttit.= "Sin orden\n";

$pdf->ezimage("encabezado.jpg",0,500,'none','left');
$pdf->ezText($txttit, 12);
$pdf->ezTable($data, $titles, '', $options);
$pdf->ezText("\n\n\n", 10);
$pdf->ezText("<b>Fecha:</b> ".date("d/m/Y"), 10);
$pdf->ezText("<b>Hora:</b> ".date("H:i:s")."\n\n", 10);
ob_end_clean();
$pdf->ezStream();
$output =  $pdf->ezOutput();
file_put_contents('mipdf.pdf', $output);
?>