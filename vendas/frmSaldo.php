<?php 
session_start();
include('../conexao/conexao.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Saldo Inicial</title>
	<meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Informe o saldo inicial para abertura do caixa</h1>
<form method="POST">
	<input type="text" name="saldo" placeholder="Ex.: 1000.00">
	<button name="entrar" class="btn btn-dark btn-lg" value="entrar">Abertura</button>
</form>
<?php 
if (isset($_POST['entrar'])): 
	$saldo =filter_input(INPUT_POST,'saldo');
	$usuario = $_SESSION['usuario'];
	$data = date('Y-m-d H:i:sP');
	
	if(empty($saldo)):
		echo '<script>alert("Preencha o campo acima!")</script>';
	else:
		$inserir = "INSERT INTO aberturaCaixa (ab_saldo, ab_nome, ab_data) values('$saldo', '$usuario', '$data');"; 
		$inserir= mysqli_query($conexao,$inserir);

		if($inserir):
			$_SESSION['libera'] = 1;
			echo '<script>alert("A abertura do caixa foi liberada com sucesso!")</script>';
			echo '<script>window.location="frmSaldo.php"</script>';
		else:
			echo '<script>alert("Ocorreu um erro na liberação do caixa!")</script>';
		endif;
	endif;
endif;
 ?>
</body>
</html>