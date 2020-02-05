<?php
    
    //session_start();
    //if (!isset($_SESSION['user'])) 
      // Header("Location: ./login.html");
    include('../conexao/conexao.php');
    session_start();
    $rs = mysqli_query($conexao,"SELECT * FROM clientes;");
?>
<html>
<head>
    <meta charset="utf-8">
   
    <title>Lista de Clientes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
</head>
<body  background="#"  >
<div class="container col-md-10">
<br>
<h1> <span class="badge badge-light" >Lista de Clientes</span></h1>
    <input type="button" class="btn btn-dark btn-lg" value="Inserir" onclick="javascript:location.href='frmInsCli.php'">
    <br><br>
    <table class="table table-striped">

        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>Celular</th>
                <th>Endereço</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <?php while ($linha = mysqli_fetch_array($rs)) {?>
            <tr>
                    <td><?php echo $linha ['cli_cod'] ?></td>
                    <td><?php  echo utf8_encode($linha ["cli_nome"]) ?></td>
                    <td><?php echo $linha ['cli_cpf'] ?></td>
                    <td><?php echo $linha ['cli_celular'] ?></td>
                    <td><?php  echo utf8_encode($linha ["cli_endereco"]) ?></td>

                    <td>
                      <button  class="btn btn btn-outline-dark bt-sm"
                       onclick="javascript: location.href='frmEdtCli.php?id=' +
                      <?php echo $linha['cli_cod'] ?>"><i class="fas fa-pencil-alt"></i></button>
                    </td>
                    <td>
                      <button  class="btn btn-outline-dark bt-sm"
                       onclick="javascript: location.href='frmRemCli.php?id=' +
                      <?php echo $linha['cli_cod'] ?>"><i class="fas fa-trash"></i></button>
                    </td>
            </tr>
        <?php }?>
    </table>
</div>
</body>
</html>

