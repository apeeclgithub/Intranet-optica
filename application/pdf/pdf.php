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
		$this->Cell(0,10, 'Rut: 76.371.666-k',0,0,'C');
		$this->Ln(5);
		$this->Cell(0,10, 'Mac Iver 180, Oficina 35',0,0,'C');
		$this->Ln(5);
		$this->Cell(0,10, 'Importadoralypltda@gmail.com',0,0,'C');
		$this->Ln(10);
		$this->Cell(40,5,"N. de Venta: ");
		$this->Ln(5);
		$this->Cell(40,5,"Fecha: ");
	}

	function TablaCliente(){
		$this->SetFont('Arial','',12);
		$this->Cell(40,5, utf8_decode('Nombre: '));
		$this->Ln(5);
		$this->Cell(40,5, utf8_decode('Dirección: '));
		$this->Ln(5);
		$this->Cell(40,5, utf8_decode('Comuna: '));
		$this->Ln(5);
		$this->Cell(40,5, utf8_decode('Rut: '));
		$this->Ln(5);
		$this->Cell(40,5, utf8_decode('Fono: '));
		$this->Ln(5);
		$this->Cell(40,5, utf8_decode('Celular: '));
	}

	function TablaBasica() {
    //Cabecera
	$this->Cell(20,10, utf8_decode('Código'),1,0,'C');
	$this->Cell(100,10, utf8_decode('Descripción'),1,0,'C');
	$this->Cell(20,10, utf8_decode('Cantidad'),1,0,'C');
	$this->Cell(30,10, utf8_decode('P. Unitario'),1,0,'C');
	$this->Cell(20,10, utf8_decode('Total'),1,0,'C');
    $this->Ln();
    
      $this->Cell(20,10,"hola",1);
      $this->Cell(100,10,"hola2",1);
      $this->Cell(20,10,"hola3",1);
      $this->Cell(30,10,"hola4",1);
      $this->Cell(20,10,"hola4",1);
      $this->Ln();
      $this->Cell(20,10,"hola",1);
      $this->Cell(100,10,"hola2",1);
      $this->Cell(20,10,"hola3",1);
      $this->Cell(30,10,"hola4",1);
      $this->Cell(20,10,"hola4",1);
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
$pdf->TablaCliente();
$pdf->Ln(10);
$pdf->TablaBasica();
//Aquí escribimos lo que deseamos mostrar...
$pdf->Output();
?> 