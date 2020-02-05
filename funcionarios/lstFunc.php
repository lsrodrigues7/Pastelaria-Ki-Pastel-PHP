<?php
    
    //session_start();
    //if (!isset($_SESSION['user'])) 
      // Header("Location: ./login.html");
    include('../conexao/conexao.php');
    session_start();
    $rs = mysqli_query($conexao,"SELECT funcionarios.func_cod, funcionarios.func_nome, funcionarios.func_cpf, funcionarios.func_celular, funcionarios.func_data_nascimento as nascimento, funcionarios.func_cargo, usuarios.usu_cod, usuarios.usu_nome as usuNome FROM funcionarios INNER JOIN usuarios ON funcionarios.usu_cod=usuarios.usu_cod;");
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Lista de Funcionários</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
</head>
<body  background="#"  >
<div class="container col-md-10">
<br>
<h1> <span class="badge badge-light" >Lista de Funcionários</span></h1>
    <input type="button" class="btn btn-dark btn-lg" value="Inserir" onclick="javascript:location.href='frmInsFunc.php'">
    
    <br><br>
    <table class="table table-striped">

        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Usuário</th>
                <th>CPF</th>
                <th>Celular</th>
                <th>Nascimento</th>
                <th>Cargo</th>
                <!--<th>Endereço</th>-->
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <?php while ($linha = mysqli_fetch_array($rs)) {?>
            <tr>
                    <td><?php echo $linha ['func_cod'] ?></td>
                    <td><?php  echo utf8_encode($linha ['func_nome']) ?></td>
                    <td><?php  echo utf8_encode($linha ['usuNome']) ?></td>
                    <td><?php echo $linha ['func_cpf'] ?></td>
                    <td><?php echo $linha ['func_celular'] ?></td>
                    <td><?php echo $linha ['nascimento'] ?></td>
                    <td><?php  echo utf8_encode($linha ['func_cargo']) ?></td>
                    <td>
                      <button  class="btn btn btn-outline-dark bt-sm"
                       onclick="javascript: location.href='frmEdtFunc.php?id=' +
                      <?php echo $linha['func_cod'] ?>"><i class="fas fa-pencil-alt"></i></button>
                    </td>
                    <td>
                      <button  class="btn btn-outline-dark bt-sm"
                       onclick="javascript: location.href='frmRemFunc.php?id=' +
                      <?php echo $linha['func_cod'] ?>"><i class="fas fa-trash"></i></button>
                    </td>
            </tr>
        <?php }?>
    </table>
</div>
</body>
</html>

