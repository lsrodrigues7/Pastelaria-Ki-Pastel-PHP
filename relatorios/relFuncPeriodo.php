<?php 
	define('FPDF_FONTPATH','font/');
	require('../pdf/fpdf.php');

	$data1=$_POST['data1'];
	$data2=$_POST['data2'];

	$pdf = new FPDF ('p','cm', 'A4');
	$pdf ->Open();
	$pdf->AddPage();
	$pdf->SetFont('Arial','B',14);
	$pdf->SetTextColor(0,0,0);
	
	 include('../conexao/conexao.php');

	 $sql = mysqli_query($conexao,"SELECT funcionarios.func_cod, funcionarios.func_nome, funcionarios.func_cpf, funcionarios.func_celular, funcionarios.func_data, funcionarios.func_data_nascimento as nascimento, funcionarios.func_cargo, usuarios.usu_cod, usuarios.usu_nome as usuNome FROM funcionarios INNER JOIN usuarios ON funcionarios.usu_cod=usuarios.usu_cod WHERE func_data BETWEEN('$data1') AND ('$data2');");

	 	date_default_timezone_set("America/Sao_Paulo"); 
	 	$data=date('d/m/Y');
	 	$pdf->SetFillColor(0, 153, 51);
	 	$pdf->Cell(0,0.5,$data,2,1,'R');
		$pdf->Cell(19,2,'Relatorio de Funcionarios - Pastelaria Ki-Pastel',2,1,'C');
		$pdf->Cell(1,1,'Cod',1,0,'C', TRUE);
		$pdf->Cell(5,1,'Funcionario',1,0,'C',TRUE);
		$pdf->Cell(4,1,'Usuario',1,0,'C',TRUE);
		$pdf->Cell(3,1,'CPF',1,0,'C',TRUE);
		$pdf->Cell(3,1,'Nascimento',1,0,'C',TRUE);
		$pdf->Cell(3,1,'Cargo',1,1,'C',TRUE);
		 

	

	 foreach ($sql as $rs) {
	 	$pdf->Cell(1,1, $rs['func_cod'],1,0,'C');
	 	$pdf->Cell(5,1, $rs['func_nome'],1,0,'C');
	 	$pdf->Cell(4,1, $rs['usuNome'],1,0,'C');
	 	$pdf->Cell(3,1, $rs['func_cpf'],1,0,'C');
	 	$pdf->Cell(3,1, $rs['nascimento'],1,0,'C');
	 	$pdf->Cell(3,1, $rs['func_cargo'],1,1,'C');
	 }

	 $pdf->OutPut();

 ?>