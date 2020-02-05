<?php 
	define('FPDF_FONTPATH','font/');
	require('../pdf/fpdf.php');

	$pdf = new FPDF ('p','cm', 'A4');
	$pdf ->Open();
	$pdf->AddPage();
	$pdf->SetFont('Arial','B',14);
	$pdf->SetTextColor(0,0,0);
	
	 include('../conexao/conexao.php');

	 $sql = mysqli_query($conexao,"SELECT produtos.prod_cod,produtos.cat_cod,produtos.prod_nome,produtos.prod_valor,produtos.prod_qtd,categorias.cat_cod, categorias.cat_nome as catNome, produtos.forn_cod, fornecedores.forn_cod,fornecedores.forn_nome as fornNome FROM produtos INNER JOIN categorias ON produtos.cat_cod=categorias.cat_cod INNER JOIN fornecedores ON produtos.forn_cod=fornecedores.forn_cod;");
	 	date_default_timezone_set("America/Sao_Paulo"); 
	 	$data=date('d/m/Y');
	 	$pdf->SetFillColor(0, 153, 51);
	 	$pdf->Cell(0,0.5,$data,2,1,'R');
		$pdf->Cell(19,2,'Relatorio de Produtos - Pastelaria Ki-Pastel',2,1,'C');
		$pdf->Cell(1,1,'Cod',1,0,'C', TRUE);
		$pdf->Cell(5,1,'Nome',1,0,'C',TRUE);
		$pdf->Cell(3,1,'Categoria',1,0,'C',TRUE);
		$pdf->Cell(5,1,'Fornecedor',1,0,'C',TRUE);
		$pdf->Cell(2,1,'Valor',1,0,'C',TRUE);
		$pdf->Cell(3,1,'Estoque',1,1,'C',TRUE);

	

	 foreach ($sql as $rs) {
	 	$pdf->Cell(1,1, $rs['prod_cod'],1,0,'C');
	 	$pdf->Cell(5,1, $rs['prod_nome'],1,0,'C');
	 	$pdf->Cell(3,1, $rs['catNome'],1,0,'C');
	 	$pdf->Cell(5,1, $rs['fornNome'],1,0,'C');
	 	$pdf->Cell(2,1, $rs['prod_valor'],1,0,'C');
	 	$pdf->Cell(3,1, $rs['prod_qtd'],1,1,'C');
	 }

	 $pdf->OutPut();

 ?>