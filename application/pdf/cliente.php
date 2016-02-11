<?php 
include_once('../../library/fpdf/fpdf.php'); 
header("Content-Type: text/html; charset=iso-8859-1 ");
require_once '../model/classDatabase.php';


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

//Pie de página
  function Footer()
  {

  	$this->SetY(260);
  	$this->Cell(40,5, 'Fecha Entrega: ');
  	$this->Cell(210,5, utf8_decode('Total:'),0,0,'C');
  	$this->Ln(10);
  	$this->Cell(40,5,'Firma Cliente: ');
  	$this->Cell(212,5, utf8_decode('Abono:'),0,0,'C');
  	$this->Ln(10);
  	$this->Cell(40,5, 'Firma Vendedor: ');
  	$this->Cell(210,5, utf8_decode('Saldo:'),0,0,'C');

  }

}
//Creación del objeto de la clase heredada
$pdf=new FPDF('L','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Times','',12);
$pdf->Ln(10);
$pdf->Ln(10);
$pdf->Header();
  	require_once '../model/classCliente.php';
  	$objClient = new Cliente();
  	$objClient->selectClientAll();

  	foreach ((array) $objClient as $key) {
  		foreach ($key as $key2 => $value) {
  			$pdf->Cell(30,10,$value['cli_nombre'],1,0);
  			$pdf->Cell(30,10,$value['cli_rut'],1,0);
  			$pdf->Cell(30,5,$value['cli_fono'],1,0);
  			$pdf->Cell(30,5,$value['cli_celular'],1,0);
			$pdf->Cell(70,5,$value['cli_direccion'],1,0);
			$pdf->Cell(25,5,$value['cli_comuna'],1,0);
			$pdf->Cell(25,5,$value['cli_giro'],1,0);
            $pdf->Ln(10);

  		}
  	}


$pdf->Output();
?> 