<?php
require('../fpdf.php');

class PDF extends FPDF
{
protected $col = 0; // Columna actual
protected $y0;      // Ordenada de comienzo de la columna





function SetCol($col)
{
	// Establecer la posición de una columna dada
	$this->col = $col;
	$x = 15+$col*105;
	$this->SetLeftMargin($x);
	$this->SetX($x);
}

function AcceptPageBreak()
{
	// Método que acepta o no el salto automático de página
	if($this->col<1)
	{
		// Ir a la siguiente columna
		$this->SetCol($this->col+1);
		// Establecer la ordenada al principio
		$this->SetY($this->y0);
		// Seguir en esta página
		return false;
	}
	else
	{
		// Volver a la primera columna
		$this->SetCol(0);
		// Salto de página
		return true;
	}
}

function ChapterTitle($num, $label)
{
	// Título
	/*$this->SetFont('Arial','',12);
	$this->SetFillColor(200,220,255);
	$this->Cell(0,6,"Capítulo $num : $label",0,1,'L',true);
	$this->Ln(4);*/
	// Guardar ordenada
	$this->y0 = $this->GetY();
}

function ChapterBody($file)
{
	// Abrir fichero de texto
	$txt = file_get_contents($file);
	// Fuente
	$this->SetFont('Times','',14);
	// Imprimir texto en una columna de 8 cm de ancho
	$this->MultiCell(72,5,$txt);
	$this->Ln();
	// Cita en itálica
	$this->SetFont('','I');
	$this->Cell(0,5,'(fin del extracto)');
	// Volver a la primera columna
	$this->SetCol(0);
}

function PrintChapter($num, $title, $file)
{
	// Añadir capítulo
	$this->AddPage();
	$this->ChapterTitle($num,$title);
	$this->ChapterBody($file);
}
}

$html = "<div class='container'>



  		<div class='row form-group col-lg-12 offset-lg-1' >

    		<div class='col-lg-5 mt-5 tarjeta' >
    			<div class='row form-group' >
    				<div class='col-lg-7' >
      					<span class='label label-default'>BELLUFF</span><br>
      					<span class='label label-default'>SENSOR BES M12 M6 PSC 80E S046</span><br>
      					<span class='label label-default'>V092-O923092</span><br>
      					<span class='label label-default'>120X62</span><br>
      					<span class='label label-default'>1</span><br>
      				</div>
      				<div class='col-lg-5' >
      					<div class='container-fluid' >
      						<img id='img-material' class='img-fluid col-lg-14 pt-3' src='../Imagenes-Material/1.png'>
      					</div>
      				</div>
      			</div>
    		</div>

    		<div class='col-lg-5 mt-5 tarjeta' >
    			<div class='row form-group' >
    				<div class='col-lg-7' >
      					<span class='label label-default'>BELLUFF</span><br>
      					<span class='label label-default'>SENSOR BES M12 M6 PSC 80E S046</span><br>
      					<span class='label label-default'>V092-O923092</span><br>
      					<span class='label label-default'>120X62</span><br>
      					<span class='label label-default'>2</span><br>
      				</div>
      				<div class='col-lg-5' >
      					<div class='container-fluid' >
      						<img id='img-material' class='img-fluid col-lg-14 pt-3' src='../Imagenes-Material/1.png'>
      					</div>
      				</div>
      			</div>
    		</div>

    		<div class='col-lg-5 mt-5 tarjeta' >
    			<div class='row form-group' >
    				<div class='col-lg-7' >
      					<span class='label label-default'>BELLUFF</span><br>
      					<span class='label label-default'>SENSOR BES M12 M6 PSC 80E S046</span><br>
      					<span class='label label-default'>V092-O923092</span><br>
      					<span class='label label-default'>120X62</span><br>
      					<span class='label label-default'>3</span><br>
      				</div>
      				<div class='col-lg-5' >
      					<div class='container-fluid' >
      						<img id='img-material' class='img-fluid col-lg-14 pt-3' src='../Imagenes-Material/1.png'>
      					</div>
      				</div>
      			</div>
    		</div>

    		<div class='col-lg-5 mt-5 tarjeta' >
    			<div class='row form-group' >
    				<div class='col-lg-7' >
      					<span class='label label-default'>BELLUFF</span><br>
      					<span class='label label-default'>SENSOR BES M12 M6 PSC 80E S046</span><br>
      					<span class='label label-default'>V092-O923092</span><br>
      					<span class='label label-default'>120X62</span><br>
      					<span class='label label-default'>4</span><br>
      				</div>
      				<div class='col-lg-5' >
      					<div class='container-fluid' >
      						<img id='img-material' class='img-fluid col-lg-14 pt-3' src='../Imagenes-Material/1.png'>
      					</div>
      				</div>
      			</div>
    		</div>


    		<div class='col-lg-5 mt-5 tarjeta' >
    			<div class='row form-group' >
    				<div class='col-lg-7' >
      					<span class='label label-default'>BELLUFF</span><br>
      					<span class='label label-default'>SENSOR BES M12 M6 PSC 80E S046</span><br>
      					<span class='label label-default'>V092-O923092</span><br>
      					<span class='label label-default'>120X62</span><br>
      					<span class='label label-default'>5</span><br>
      				</div>
      				<div class='col-lg-5' >
      					<div class='container-fluid' >
      						<img id='img-material' class='img-fluid col-lg-14 pt-3' src='../Imagenes-Material/1.png'>
      					</div>
      				</div>
      			</div>
    		</div>





    		<div class='col-lg-5 mt-5 tarjeta' >
    			<div class='row form-group' >
    				<div class='col-lg-7' >
      					<span class='label label-default'>BELLUFF</span><br>
      					<span class='label label-default'>SENSOR BES M12 M6 PSC 80E S046</span><br>
      					<span class='label label-default'>V092-O923092</span><br>
      					<span class='label label-default'>120X62</span><br>
      					<span class='label label-default'>6</span><br>
      				</div>
      				<div class='col-lg-5' >
      					<div class='container-fluid' >
      						<img id='img-material' class='img-fluid col-lg-14 pt-3' src='../Imagenes-Material/1.png'>
      					</div>
      				</div>
      			</div>
    		</div>


    		<div class='col-lg-5 mt-5 tarjeta' >
    			<div class='row form-group' >
    				<div class='col-lg-7' >
      					<span class='label label-default'>BELLUFF</span><br>
      					<span class='label label-default'>SENSOR BES M12 M6 PSC 80E S046</span><br>
      					<span class='label label-default'>V092-O923092</span><br>
      					<span class='label label-default'>120X62</span><br>
      					<span class='label label-default'>7</span><br>
      				</div>
      				<div class='col-lg-5' >
      					<div class='container-fluid' >
      						<img id='img-material' class='img-fluid col-lg-14 pt-3' src='../Imagenes-Material/1.png'>
      					</div>
      				</div>
      			</div>
    		</div>

    		<div class='col-lg-5 mt-5 tarjeta'>
    			<div class='row form-group' >
    				<div class='col-lg-7' >
      					<span class='label label-default'>BELLUFF</span><br>
      					<span class='label label-default'>SENSOR BES M12 M6 PSC 80E S046</span><br>
      					<span class='label label-default'>V092-O923092</span><br>
      					<span class='label label-default'>120X62</span><br>
      					<span class='label label-default'>8</span><br>
      				</div>
      				<div class='col-lg-5' >
      					<div class='container-fluid' >
      						<img id='img-material' class='img-fluid col-lg-14 pt-3' src='../Imagenes-Material/1.png'>
      					</div>
      				</div>
      			</div>
    		</div>


  		</div>
	</div>";

$pdf = new PDF();
$title = '';
$pdf->SetTitle($title);
$pdf->SetAuthor('');
$pdf->PrintChapter(1,'',$html);
$pdf->PrintChapter(2,'','20k_c2.txt');
$pdf->Output();
?>
