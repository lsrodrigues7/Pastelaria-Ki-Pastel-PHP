<?php
    
  //  session_start();
    //if (!isset($_SESSION['user'])) 
      // Header("Location: ./login.html");
    
    include('../conexao/conexao.php');

    $id = trim($_REQUEST['id']);
   $rs = mysqli_query($conexao,"SELECT funcionarios.func_cod, funcionarios.func_nome, funcionarios.func_cpf, funcionarios.func_celular, funcionarios.func_data_nascimento as nascimento, funcionarios.func_cargo, usuarios.usu_cod, usuarios.usu_nome as usuNome FROM funcionarios INNER JOIN usuarios ON funcionarios.usu_cod=usuarios.usu_cod WHERE func_cod=".$id);
    $exclui = mysqli_fetch_array($rs);

?>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <link rel="stylesheet" href="css/insStyle.css">    
    </head>
    <body  background="#"  >
    <br><br><br>
    <div class="container">
        <div class="box">
          <h3><span class="badge badge-light">Remover Funcionarios</span></h3>
          <form id="frmRemFunc" name="frmRemFunc" method="POST" action="remFunc.php">
                
                <div class="form-group">
                    <label for="lblId">
                        <span class="badge badge-light">ID: </span>
                    </label>
                    <input type="text" id="txtId" name="txtId" readonly="true" class="form-control col-md-12" value="<?php echo $exclui['func_cod'] ?>">
                </div>

                <div class="form-group">
                    <label for="lblNome">
                        <span class="badge badge-light ">Nome: </span>
                    </label>
                    <input type="text" id="txtNome" name="txtNome" readonly="true" class="form-control col-md-12" value="<?php echo utf8_encode($exclui['func_nome']) ?>">
                </div>

                <div class="form-group">
                    <label for="lblUsu">
                        <span class="badge badge-light ">Usuário: </span>
                    </label>
                    <input type="text" id="txtUsu" name="txtUsu" readonly="true" class="form-control col-md-12" value="<?php echo utf8_encode($exclui['usuNome']) ?>">
                </div>

                <div class="form-group">
                    <label for="lblCpf">
                        <span class="badge badge-light ">CPF: </span>
                    </label>
                    <input type="text" id="txtCpf" name="txtCpf" readonly="true" class="form-control col-md-12" value="<?php echo utf8_encode($exclui['func_cpf']) ?>">
                    
                </div>

                <div class="form-group">
                    <label for="lblCel">
                        <span class="badge badge-light">Celular: </span>
                    </label>
                    <input type="text" id="txtCel" name="txtCel" readonly="true" class="form-control col-md-12" value="<?php echo $exclui['func_celular'] ?>">
                </div>

                <div class="form-group">
                    <label for="lblNasc">
                        <span class="badge badge-light">Nascimento: </span>
                    </label>
                    <input type="text" id="txtNasc" name="txtNasc" readonly="true" class="form-control col-md-12" value="<?php echo $exclui['nascimento'] ?>">
                </div>

                <div class="form-group">
                    <label for="lblCargo">
                        <span class="badge badge-light">Cargo: </span>
                    </label>
                    <input type="text" id="txtCargo" name="txtCargo" readonly="true" class="form-control col-md-12" value="<?php echo $exclui['func_cargo'] ?>">
                </div>

                <input type="submit" id="btConfirmar" name="btConfirmar"
                    class="btn btn-light " value="Confirmar">               
                <input type="button" id="btCancelar" name="btCancelar"
                    class="btn btn-dark " value="Cancelar" onclick="javascript:location.href='lstFunc.php'"> 
          </form>
        </div>
      </div>
    </body>
</html>