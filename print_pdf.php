<?php
/*
require("./vendor/autoload.php");

	use Spipu\Html2Pdf\Html2Pdf;

	
	ob_start();
	require_once("print_view.php");
	$html =ob_get_clean();

	$html2pdf = new Html2Pdf('P','A4','es','true','UTF-8');
	$html2pdf-> writeHtml($html);
	$html2pdf->output("prueba.pdf");
*/

require("/fpdf/fpdf.php");
//include("/modelo/conexion.php");

//ini_set('max_execution_time', 300);
$UN_SALTO="\r\n";
  $DOS_SALTOS="\r\n\r\n";




//$array = explode("|", $datos);
//$cont = count($array) -1;
$pdf = new FPDF();

$pdf->AddPage();
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,2,"",0,1,'L');
	

$pdf->Image('img/log1.PNG',20,13,50);
$pdf->Image('img/log2.PNG',75,13,60);
$pdf->Image('img/log3.PNG',140,8,50);
$pdf->Cell(190,20,"",0,1,'L');
		//Largo, Alto, Texto, Borde: 1 ó 0, Salto de linea, 1 ó 0, Alineancion: L,C,R.
$pdf->SetTextColor(0,0,0);
$pdf->SetFillColor(157,255,97);
$pdf->Cell(190,7,utf8_decode("REPORTE SEMESTRAL DE LA COORDINACIÓN DE TUTORÍAS DE DIVISIÓN ACADÉMICA"),1,1,'C',true);

///coordinador, fecha y periodo
$pdf->SetFont('Arial','I',10);
$pdf->Cell(27,7,utf8_decode("Coordinador(a):"),1,0,'L');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(73,7,utf8_decode("Lic. Maria de los Angeles Lezama Tenorio"),1,0,'C');
$pdf->SetFont('Arial','I',10);
$pdf->Cell(13,7,utf8_decode("Fecha:"),1,0,'L');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(20,7,utf8_decode("12/2019/30"),1,0,'C');
$pdf->SetFont('Arial','I',10);
$pdf->Cell(15,7,utf8_decode("Periodo:"),1,0,'L');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(42,7,utf8_decode("Agosto-Diciembre 2019"),1,1,'C');

//programa educativo, matricula total de la cerrera, asistieron
$pdf->SetFont('Arial','I',10);
$pdf->Cell(34,7,utf8_decode("Programa educativo:"),1,0,'L');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(68,7,utf8_decode("Lic. Sistemas Computacionales"),1,0,'C');
$pdf->SetFont('Arial','I',10);
$pdf->Cell(46,7,utf8_decode("Matricula total de la carrera:"),1,0,'L');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(11,7,"1000",1,0,'C');
$pdf->SetFont('Arial','I',10);
$pdf->Cell(20,7,utf8_decode("Asistieron:"),1,0,'L');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(11,7,"2000",1,1,'C');


//% de deserción, % de aprobación y % de reprobación  
$pdf->SetFont('Arial','I',10);
$pdf->Cell(41,7,utf8_decode("% de deserción:"),1,0,'L');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(20,7,"100%",1,0,'C');
$pdf->SetFont('Arial','I',10);
$pdf->Cell(43,7,utf8_decode("% de aprobación:"),1,0,'L');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(20,7,"100%",1,0,'C');
$pdf->SetFont('Arial','I',10);
$pdf->Cell(46,7,utf8_decode("% de reprobación:"),1,0,'L');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(20,7,"100%",1,1,'C');

//Estudiantes atendidos
$pdf->Cell(190,7,utf8_decode("Estudiantes atendidos"),1,1,'C');

//

$pdf->Cell(6,15,utf8_decode("No"),1,0,'C');
$pdf->Cell(65,15,utf8_decode("Lista de tutores"),1,0,'C');
$pdf->Cell(12,15,utf8_decode("Grupo"),1,0,'C');
$pdf->Cell(12,7.5,utf8_decode("° TG"),1,0,'C');
$pdf->Cell(12,7.5,utf8_decode("° TI"),1,0,'C');
$pdf->Cell(12,7.5,utf8_decode("° MA"),1,0,'C');
$pdf->Cell(12,7.5,utf8_decode("° MR"),1,0,'C');
$pdf->Cell(12,7.5,utf8_decode("Des"),1,0,'C');
$pdf->Cell(12,7.5,utf8_decode("Canali"),1,0,'C');
$pdf->Cell(35,7.5,utf8_decode(""),1,1,'C');


$pdf->Cell(83,7.5,utf8_decode(""),0,0,'C');
$pdf->Cell(6,7.5,utf8_decode("H"),1,0,'C');
$pdf->Cell(6,7.5,utf8_decode("M"),1,0,'C');
$pdf->Cell(6,7.5,utf8_decode("H"),1,0,'C');
$pdf->Cell(6,7.5,utf8_decode("M"),1,0,'C');
$pdf->Cell(6,7.5,utf8_decode("H"),1,0,'C');
$pdf->Cell(6,7.5,utf8_decode("M"),1,0,'C');
$pdf->Cell(6,7.5,utf8_decode("H"),1,0,'C');
$pdf->Cell(6,7.5,utf8_decode("M"),1,0,'C');
$pdf->Cell(6,7.5,utf8_decode("H"),1,0,'C');
$pdf->Cell(6,7.5,utf8_decode("M"),1,0,'C');
$pdf->Cell(6,7.5,utf8_decode("H"),1,0,'C');
$pdf->Cell(6,7.5,utf8_decode("M"),1,0,'C');
$pdf->Cell(35,7.5,utf8_decode("Área Canalización"),1,1,'C');






//TUTORESS
for ($i	=0; $i<18 ; $i++) { 

	$pdf->SetFont('Arial','I',10);
	$pdf->Cell(6,7,utf8_decode("99"),1,0,'C');
	$pdf->Cell(65,7,utf8_decode("Maria de los Angeles Lezama Tenorio"),1,0,'C');
	$pdf->Cell(12,7,utf8_decode("10° A"),1,0,'C');
	$pdf->Cell(12,7,utf8_decode("99"),1,0,'C');
	$pdf->Cell(12,7,utf8_decode("99"),1,0,'C');
	$pdf->Cell(12,7,utf8_decode("99"),1,0,'C');
	$pdf->Cell(12,7,utf8_decode("99"),1,0,'C');
	$pdf->Cell(12,7,utf8_decode("99"),1,0,'C');
	$pdf->Cell(12,7,utf8_decode("99"),1,0,'C');
	$pdf->Cell(35,7,utf8_decode("Psicologia"),1,1,'C');
}

		//$pdf->Cell(95,5,"sasa",1,1,'L');
$pdf->Output();
		
		/*$pdf->Cell(95,5+$y,$Descripcion,1,0,'L');
		$pdf->Cell(3,5+$y,"",0,0,'L');
		$pdf->Cell(95,5+$y,$_2Descripcion,1,1,'L');
		
		$pdf->Cell(95,5+$y,$Norma,1,0,'L');
		$pdf->Cell(3,5+$y,"",0,0,'L');
		$pdf->Cell(95,5+$y,$_2Norma,1,1,'L');
		
		$pdf->Cell(95,5+$y,$Medida,1,0,'L');
		$pdf->Cell(3,5+$y,"",0,0,'L');
		$pdf->Cell(95,5+$y,$_2Medida,1,1,'L');
		
		$pdf->Cell(95,5+$y,"ID: ".$idMaterial,1,0,'L');
		$pdf->Cell(3,5+$y,"",0,0,'L');
		$pdf->Cell(95,5+$y,"ID: ".$_2idMaterial,1,1,'L');
		
		$pdf->Cell(95,44,"",1,0,'L');
		$pdf->Cell(3,44,"",0,0,'L');
		$pdf->Cell(95,44,"",1,1,'L');
	//
		*/
	//
	//
	/*
		//IMAGENES DEL MATERIAL
		$pdf->Image('../Imagenes-Material/'.$Imagen,60,33+($y*5)+5+$Yi,42);
		$pdf->Image('../Imagenes-Material/'.$_2Imagen,160,33+($y*5)+5+$Yi,42);
	//
		//CODIGOS QR
		//$pdf->Image('../QRs/'.$array1[5].'.jpg',12,36+($y*5)+5+$Yi,35);
		//$pdf->Image('../QRs/'.$array2[5].'.jpg',112,36+($y*5)+5+$Yi,30);
	//
		$pdf->Image('../QRs/'.$idMaterial.'.jpg',12,33+($y*5)+5+$Yi,42);
		$pdf->Image('../QRs/'.$_2idMaterial.'.jpg',112,33+($y*5)+5+$Yi,42);

		$Yi = $Yi+86;
	*/





?>