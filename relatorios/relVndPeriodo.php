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

	 $sql = mysqli_query($conexao,"SELECT vendas.vnd_cod, vendas.vnd_valor, vendas.vnd_data, vendas.vnd_qtd, clientes.cli_cod, clientes.cli_nome, funcionarios.func_cod, funcionarios.func_nome, produtos.prod_cod, produtos.prod_nome  FROM vendas INNER JOIN clientes ON vendas.cli_cod=clientes.cli_cod INNER JOIN funcionarios ON vendas.func_cod=funcionarios.func_cod INNER JOIN produtos ON vendas.prod_cod=produtos.prod_cod WHERE vnd_data BETWEEN('$data1') AND ('$data2');");
	 	date_default_timezone_set("America/Sao_Paulo"); 
	 	$data=date('d/m/Y');
	 	$pdf->SetFillColor(0, 153, 51);
	 	$pdf->Cell(0,0.5,$data,2,1,'R');
		$pdf->Cell(19,2,'Relatorio de Vendas - Pastelaria Ki-Pastel',2,1,'C');
		$pdf->Cell(1,0.5,'Cod',1,0,'L', TRUE);
		$pdf->Cell(4,0.5,'Cliente',1,0,'L',TRUE);
		$pdf->Cell(3,0.5,'Funcio.',1,0,'L',TRUE);
		$pdf->Cell(4,0.5,'Produto',1,0,'L',TRUE);
		$pdf->Cell(2,0.5,'Valor',1,0,'L',TRUE);
		$pdf->Cell(2,0.5,'Quant.',1,0,'L',TRUE);
		$pdf->Cell(3.9,0.5,'Data             Hora',1,1,'L',TRUE);

	

	 foreach ($sql as $rs) {
	 	$pdf->Cell(1,0.5, $rs['vnd_cod'],1,0,'L');
	 	$pdf->Cell(4,0.5, $rs['cli_nome'],1,0,'L');
	 	$pdf->Cell(3,0.5, $rs['func_nome'],1,0,'L');
	 	$pdf->Cell(4,0.5, $rs['prod_nome'],1,0,'L');
	 	$pdf->Cell(2,0.5, $rs['vnd_valor'],1,0,'L');
	 	$pdf->Cell(2,0.5, $rs['vnd_qtd'],1,0,'L');
	 	$pdf->Cell(3.9,0.5, $rs['vnd_data'],1,1,'L');
	 }

	 $pdf->OutPut();

 ?>