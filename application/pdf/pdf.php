<?php 
include_once('../../library/fpdf/fpdf.php'); 
header("Content-Type: text/html; charset=iso-8859-1 ");

class PDF extends FPDF
{
   //Cabecera de página
	function Header()
	{

		$this->Image('../../public/img/logo.png',87,8,33);

		$this->SetFont('Arial','',12);
		$this->Ln(10);
		$this->Ln(10);
		$this->Cell(0,10, utf8_decode('Importadora y Comercializadora de artículos Ópticos'),1,0,'C');
		$this->Ln(10);
		$this->Cell(0,10, 'Rut: 76.371.666-k');
		$this->Ln(5);
		$this->Cell(0,10, 'Mac Iver 180, Oficina 35');
		$this->Ln(5);
		$this->Cell(0,10, 'Importadoralypltda@gmail.com');
		$this->Ln(10);
		$this->Cell(40,5,"Fecha: ");
	}

	function TablaBasica($header) {
    //Cabecera
    foreach($header as $col)
    $this->Cell(40,7,$col,1);
    $this->Ln();
    
      $this->Cell(40,5,"hola",1);
      $this->Cell(40,5,"hola2",1);
      $this->Cell(40,5,"hola3",1);
      $this->Cell(40,5,"hola4",1);
      $this->Ln();
      $this->Cell(40,5,"linea ",1);
      $this->Cell(40,5,"linea 2",1);
      $this->Cell(40,5,"linea 3",1);
      $this->Cell(40,5,"linea 4",1);
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
$pdf->Ln(10);
$header=array('Columna 1','Columna 2','Columna 3','Columna 4');
$pdf->TablaBasica($header);
//Aquí escribimos lo que deseamos mostrar...
$pdf->Output();
?> 