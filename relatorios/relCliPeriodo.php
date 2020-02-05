<?php 
	define('FPDF_FONTPATH','font/');
	require('../pdf/fpdf.php');

	$data1=$_POST['data1'];
	$data2=$_POST['data2'];

	$pdf = new FPDF ('p','cm', 'A4');
	$pdf ->Open();
	$pdf->AddPage();
	$pdf->SetFont('Arial','B',11);
	$pdf->SetTextColor(0,0,0);
	
	 include('../conexao/conexao.php');

	 $sql = mysqli_query($conexao,"SELECT * FROM clientes WHERE cli_data BETWEEN('$data1') AND ('$data2');");
	 	date_default_timezone_set("America/Sao_Paulo"); 
	 	$data=date('d/m/Y');
	 	$pdf->SetFillColor(0, 153, 51);
	 	$pdf->Cell(0,0.5,$data,2,1,'R');
		$pdf->Cell(19,2,'Relatorio de Clientes - Pastelaria Ki-Pastel',2,1,'C');
		$pdf->Cell(1,0.5,'Cod',1,0,'C', TRUE);
		$pdf->Cell(6,0.5,'Nome',1,0,'C',TRUE);
		$pdf->Cell(3,0.5,'CPF',1,0,'C',TRUE);
		$pdf->Cell(3,0.5,'Celular',1,0,'C',TRUE);
		$pdf->Cell(8,0.5,'Endereco',1,1,'C',TRUE);

	

	 foreach ($sql as $rs) {
	 	$pdf->Cell(1,0.5, $rs['cli_cod'],1,0,'C');
	 	$pdf->Cell(6,0.5, $rs['cli_nome'],1,0,'C');
	 	$pdf->Cell(3,0.5, $rs['cli_cpf'],1,0,'C');
	 	$pdf->Cell(3,0.5, $rs['cli_celular'],1,0,'C');
	 	$pdf->Cell(8,0.5, $rs['cli_endereco'],1,1,'C');
	 }

	 $pdf->OutPut();

 ?>