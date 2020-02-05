<?php
    
    //session_start();
    //if (!isset($_SESSION['user'])) 
      // Header("Location: ./login.html");
    include('../conexao/conexao.php');
    session_start();
    $rs = mysqli_query($conexao,"SELECT vendas.vnd_cod, vendas.vnd_valor, vendas.vnd_data, vendas.vnd_qtd, clientes.cli_cod, clientes.cli_nome, funcionarios.func_cod, funcionarios.func_nome, produtos.prod_cod, produtos.prod_nome  FROM vendas INNER JOIN clientes ON vendas.cli_cod=clientes.cli_cod INNER JOIN funcionarios ON vendas.func_cod=funcionarios.func_cod INNER JOIN produtos ON vendas.prod_cod=produtos.prod_cod;");
?>
<html>
<head>
    <meta charset="utf-8">
   
    <title>Lista de Vendas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
</head>
<body  background="#"  >
<div class="container col-md-10">
<br>
<h1> <span class="badge badge-light" >Lista de Vendas</span></h1>
    <input type="button" class="btn btn-dark btn-lg" value="Inserir" onclick="javascript:location.href='frmInsVnd.php'">
    <br><br>
    <table class="table table-striped">

        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Funcionário</th>
                <th>Produto</th>
                <th>Valor</th>
                <th>Quantidade</th>
                <th>Data e Hora</th>
              
                <th>Excluir</th>
            </tr>
        </thead>
          <?php while ($linha = mysqli_fetch_array($rs)) {?>
            <tr>
                    <td><?php echo $linha ['vnd_cod'] ?></td>
                    <td><?php  echo utf8_encode($linha ["cli_nome"]) ?></td>
                    <td><?php  echo utf8_encode($linha ["func_nome"]) ?></td>
                    <td><?php  echo utf8_encode($linha ["prod_nome"]) ?></td>
                    <td>R$ <?php echo number_format($linha ['vnd_valor'],2,',','.') ?></td>
                    <td><?php  echo utf8_encode($linha ["vnd_qtd"]) ?></td>
                    <td><?php echo $linha ['vnd_data'] ?></td>
                    
                    <td>
                      <button  class="btn btn-outline-dark bt-sm"
                       onclick="javascript: location.href='frmRemVnd.php?id=' +
                      <?php echo $linha['vnd_cod'] ?>"><i class="fas fa-trash"></i></button>
                    </td>
            </tr>
        <?php }?>
    </table>
</div>
</body>
</html>

