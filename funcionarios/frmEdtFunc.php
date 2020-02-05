<?php
   
    session_start();
    //if (!isset($_SESSION['user'])) 
    //Header("Location: ./login.html");

    include('../conexao/conexao.php');
    $id = trim($_REQUEST['id']);
    $rs = mysqli_query($conexao,"SELECT funcionarios.func_cod, funcionarios.func_nome, funcionarios.func_cpf, funcionarios.func_celular, funcionarios.func_data_nascimento as nascimento, funcionarios.func_cargo, usuarios.usu_cod, usuarios.usu_nome as usuNome FROM funcionarios INNER JOIN usuarios ON funcionarios.usu_cod=usuarios.usu_cod WHERE func_cod=".$id);
    $edita = mysqli_fetch_array($rs);
  
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Editar Categorias</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="css\insStyle.css">    
    </head>
    <body  background="#"  >
    <br><br><br>
      <div class="container">
        <div class="box">
          <h3><span class="badge badge-light">Editar Produtos</span></h3>
            
            <form id="frmEdtFunc" name="frmEdtFunc" method="POST" action="edtFunc.php">

                <div class="form-group">
                    <label for="lblId"><span class="badge badge-light">ID: </span>  </label>
                    <input type="text" class="form-control col-md-12" id="txtId" name="txtId" readonly="true" value="<?php echo $edita['func_cod'] ?>">
                </div>

                <div class="form-group">
                    <label for="lblNome"><span class="badge badge-light">Nome: </span></label>
                    <input type="text" class="form-control col-md-12" id="txtNome"
                        name="txtNome" value="<?php echo $edita['func_nome'] ?>" placeholder="Informe o nome do Funcionário">               
                </div>

                <div class="form-group">
                    <label for="lblUsu"><span class="badge badge-light ">Usuário: </span> </label>
                    <select class="form-control" name="selUsu" id="selUsu">
                        <option value="opEdtProdCat" disabled selected hidden><?php echo utf8_encode($edita['usuNome']) ?></option>
                        <?php
                            include('../conexao/conexao.php');
                         
                            $consulta=mysqli_query($conexao,"SELECT * FROM usuarios order by usu_nome ASC"); 
                    
                            while ($dados = mysqli_fetch_array($consulta)) {
                            echo utf8_encode("<option value='".$dados['usu_cod']."'>".$dados['usu_nome']."</option>");
                                } 
                        ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="lblCpf"><span class="badge badge-light">CPF: </span></label>
                    <input type="text" class="form-control col-md-12" id="txtCpf"
                        name="txtCpf"  value="<?php echo $edita['func_cpf'] ?>" placeholder="Informe o CPF">               
                </div>

                <div class="form-group">
                    <label for="lblCel"><span class="badge badge-light">Celular: </span></label>
                    <input type="text" class="form-control col-md-12" id="txtCel"
                        name="txtCel" value="<?php echo $edita['func_celular'] ?>" placeholder="Informe o Celular">               
                </div>

                <div class="form-group">
                <label for="lblNasc"><span class="badge badge-light">Nascimento: </span></label>
                <input type="text" class="form-control col-md-12" id="txtNasc"
                        name="txtNasc" value="<?php echo $edita['nascimento'] ?>" placeholder="Informe a data de Nascimento">               
                </div>

                <div class="form-group">
                    <label for="lblCargo"><span class="badge badge-light">Cargo: </span></label>
                    <input type="text" class="form-control col-md-12" id="txtCargo"
                        name="txtCargo" value="<?php echo $edita['func_cargo'] ?>" placeholder="Informe o Cargo">               
                </div>

                <input type="submit" id="btEnviar" name="btEnviar"
                    class="btn btn-light bt-lg" value="Atualizar">
                <input type="reset" id="btLimpar" name="btLimpar"
                    class="btn btn-secondary bt-lg" value="Limpar">
                <input type="button" id="btCancelar" name="btCancelar"
                    class="btn btn-dark bt-lg" value="Cancelar" onclick="javascript:location.href='lstFunc.php'">
            </form>        
        </div>
    </body>
</html>