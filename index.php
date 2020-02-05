<?php
	session_start();
	include('conexao/conexao.php');
	if (!isset($_SESSION['usu_nick'])) 
   Header("Location: ./frmLogin.php");
?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<title>Ki-Pastel</title>
	<link rel="stylesheet" href="css/style.css">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
</head>

<body>
	<div class="menu-bar">
		<header>
		
		<img src="img/Ki-Pastel.png" align="left" alt="some text" width="250" height="50">
		
		<ul> 
			
				<li><i class="fas fa-home"></i><a href="#" target="iframe"> Home</a></li>
				<li><i class="fas fa-shopping-basket"></i><a href="vendas/lstVnd.php" target="iframe"> Vendas</a> 
				</li>
				<li><i class="fas fa-user-plus"></i><a> Cadastro</a>
						<div class="sub-menu-1">
							<ul>
                      			<li><a href="categorias/lstCat.php" target="iframe">Categorias</a></li>
                      			<li><a href="clientes/lstCli.php" target="iframe">Clientes</a></li>
                      			<li><a href="fornecedores/lstForn.php" target="iframe">Fornecedores</a></li>
                      			<li><a href="funcionarios/lstFunc.php" target="iframe">Funcionários</a></li>
                      			<li><a href="produtos/lstProd.php" target="iframe">Produtos</a></li>
                      			<li><a href="usuarios/lstUsu.php" target="iframe">Usuários</a></li>    
                			</ul> 
                		</div>     
				</li>
				<li><a>Relatórios</a>
						<div class="sub-menu-1">
							<ul>
                      			<li><a href="relatorios/relCat.php" target="iframe">Categorias</a></li>
                      			<li><a href="relatorios/relCli.php" target="iframe">Clientes</a></li>
                      			<li><a href="relatorios/relForn.php" target="iframe">Fornecedores</a></li>
                      			<li><a href="relatorios/relFunc.php" target="iframe">Funcionários</a></li>
                      			<li><a href="relatorios/relProd.php" target="iframe">Produtos</a></li>
                      			<li><a href="relatorios/relUsu.php" target="iframe">Usuários</a></li> 
                      			<li><a href="relatorios/relVnd.php" target="iframe">Vendas</a></li>
                			</ul> 
                		</div>  
                </li>
                <li><a>Rel. Período</a>
						<div class="sub-menu-1">
							<ul>
                      			<li><a href="relatorios/frmCatPeriodo.php" target="iframe">Categorias período</a></li>
                      			<li><a href="relatorios/frmCliPeriodo.php" target="iframe">Clientes período</a></li>
                      			<li><a href="relatorios/frmFornPeriodo.php" target="iframe">Fornecedores período</a></li>
                      			<li><a href="relatorios/frmFuncPeriodo.php" target="iframe">Funcionários período</a></li>
                      			<li><a href="relatorios/frmProdPeriodo.php" target="iframe">Produtos período</a></li>
                      			<li><a href="relatorios/frmUsuPeriodo.php" target="iframe">Usuários período</a></li>
                      			<li><a href="relatorios/frmVndPeriodo.php" target="iframe">Vendas período</a></li>
                			</ul> 
                		</div>  
                </li>

				<li><a href="logout.php">Sair</a></li>
				
		</ul>
		</header>
	</div>
	<div  class="homeCentral">
		<iframe width="100%" height="1000px" frameborder="0px" name="iframe"></iframe>
	</div>
	
	

</body>
</html>