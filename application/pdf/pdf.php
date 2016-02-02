<?php 
include_once('../../library/fpdf/fpdf.php'); 
header("Content-Type: text/html; charset=iso-8859-1 ");

class PDF extends FPDF
{
   //Cabecera de página
	function Header()
	{

		/*$this->Image('../../public/img/logo-250.png',10,8,33);*/

		$this->SetFont('Arial','B',12);

		$this->Cell(0,10, utf8_decode('Importadora y Comercializadora de artículos Ópticos'),1,0,'C');
		$this->Ln(10);
		$this->Cell(0,10, 'Rut: 76.371.666-k');
	}
//Pie de página
	function Footer()
	{

		$this->SetY(-10);

		$this->SetFont('Arial','I',8);

		$this->Cell(0,10,'Importadora');
	}

}
//Creación del objeto de la clase heredada
$pdf=new PDF();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
//Aquí escribimos lo que deseamos mostrar...
$pdf->Output();
?> 