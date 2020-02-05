<?php
    
    //session_start();
    //if (!isset($_SESSION['user'])) 
      // Header("Location: ./login.html");
    include('../conexao/conexao.php');
    session_start();
    $rs = mysqli_query($conexao,"SELECT produtos.prod_cod,produtos.prod_data,produtos.cat_cod,produtos.prod_nome,produtos.prod_valor,produtos.prod_qtd,categorias.cat_cod, categorias.cat_nome as catNome, produtos.forn_cod, fornecedores.forn_cod,fornecedores.forn_nome as fornNome FROM produtos INNER JOIN categorias ON produtos.cat_cod=categorias.cat_cod INNER JOIN fornecedores ON produtos.forn_cod=fornecedores.forn_cod;");

?>
<html>
<head>
    <meta charset="utf-8">
   
    <title>Lista de Produtos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
</head>
<body  background="#"  >
<div class="container col-md-10">
<br>
<h1> <span class="badge badge-light" >Lista de Produtos</span></h1>
    <input type="button" class="btn btn-dark btn-lg" value="Inserir" onclick="javascript:location.href='frmInsProd.php'">
 
    <br><br>
    <table class="table table-striped">

        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Categoria</th>
                <th>Fornecedor</th>
                <th>Valor</th>
                <th>Quantidade</th>
                <th>Data</th>
                <th>Editar</th>
                <th>Excluir</th>
                <th></th>
            </tr>
        </thead>
        <?php while ($linha = mysqli_fetch_array($rs)) {?>
            <tr>
                    <td><?php echo $linha ['prod_cod'] ?></td>
                    <td><?php  echo utf8_encode($linha ["prod_nome"]) ?></td>
                    <td><?php  echo utf8_encode($linha ["catNome"]) ?></td>
                    <td><?php  echo utf8_encode($linha ["fornNome"]) ?></td>
                    <td>R$ <?php echo number_format($linha ['prod_valor'],2,',','.') ?></td>
                    <td><?php echo $linha ['prod_qtd'] ?></td>
                    <td><?php echo $linha ['prod_data'] ?></td>
                    
                    <td>
                      <button  class="btn btn btn-outline-dark bt-sm"
                       onclick="javascript: location.href='frmEdtProd.php?id=' +
                      <?php echo $linha['prod_cod'] ?>"><i class="fas fa-pencil-alt"></i></button>
                    </td>
                    <td>
                      <button  class="btn btn-outline-dark bt-sm"
                       onclick="javascript: location.href='frmRemProd.php?id=' +
                      <?php echo $linha['prod_cod'] ?>"><i class="fas fa-trash"></i></button>
                    </td>
            </tr>
        <?php }?>
    </table>
</div>
</body>
</html>

