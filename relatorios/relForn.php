<?php 
	define('FPDF_FONTPATH','font/');
	require('../pdf/fpdf.php');

	$pdf = new FPDF ('p','cm', 'A4');
	$pdf ->Open();
	$pdf->AddPage();
	$pdf->SetFont('Arial','B',14);
	$pdf->SetTextColor(0,0,0);
	
	 include('../conexao/conexao.php');

	 $sql = mysqli_query($conexao,"SELECT * FROM fornecedores;");
	 	date_default_timezone_set("America/Sao_Paulo"); 
	 	$data=date('d/m/Y');
	 	$pdf->SetFillColor(0, 153, 51);
	 	$pdf->Cell(0,0.5,$data,2,1,'R');
		$pdf->Cell(19,2,'Relatorio de Fornecedores - Pastelaria Ki-Pastel',2,1,'L');
		$pdf->Cell(2,1,'Cod',1,0,'C', TRUE);
		$pdf->Cell(8,1,'Nome do Fornecedor',1,1,'C',TRUE);
	

	

	 foreach ($sql as $rs) {
	 	$pdf->Cell(2,1, $rs['forn_cod'],1,0,'C');
	 	$pdf->Cell(8,1, $rs['forn_nome'],1,1,'C');
	 }

	 $pdf->OutPut();

 ?>