<?php 
include_once('../../library/fpdf/fpdf.php'); 
header("Content-Type: text/html; charset=iso-8859-1 ");
require_once '../model/classDatabase.php';


class PDF extends FPDF
{
   //Cabecera de página
	function Header()
	{

		$this->Image('../../public/img/logo.png',130,8,33);

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
	}

//Pie de página
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}

}
//Creación del objeto de la clase heredada
$pdf=new PDF('L','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Times','',12);
$pdf->Ln(10);
$pdf->Ln(10);
$pdf->Cell(50,10, utf8_decode('Nombre'),1,0,'C');
$pdf->Cell(30,10, utf8_decode('Rut'),1,0,'C');
$pdf->Cell(25,10, utf8_decode('Fono'),1,0,'C');
$pdf->Cell(25,10, utf8_decode('Celular'),1,0,'C');
$pdf->Cell(80,10, utf8_decode('Dirección'),1,0,'C');
$pdf->Cell(35,10, utf8_decode('Comuna'),1,0,'C');
$pdf->Cell(35,10, utf8_decode('Giro'),1,0,'C');
$pdf->Ln();
  	require_once '../model/classCliente.php';
  	$objClient = new Cliente();
  	$objClient->selectClientAll();

  	foreach ((array) $objClient as $key) {
  		foreach ($key as $key2 => $value) {
  			$pdf->Cell(50,10,utf8_decode($value['cli_nombre']),1,0);
  			$pdf->Cell(30,10,utf8_decode($value['cli_rut']),1,0);
  			$pdf->Cell(25,10,utf8_decode($value['cli_fono']),1,0);
  			$pdf->Cell(25,10,utf8_decode($value['cli_celular']),1,0);
			$pdf->Cell(80,10,utf8_decode($value['cli_direccion']),1,0);
			$pdf->Cell(35,10,utf8_decode($value['cli_comuna']),1,0);
			$pdf->Cell(35,10,utf8_decode($value['cli_giro']),1,0);
			$pdf->Ln(10);

  		}
  	}


$pdf->Output();
?> 