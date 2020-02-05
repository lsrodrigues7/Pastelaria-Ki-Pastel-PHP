<?php
   
    session_start();
    //if (!isset($_SESSION['user'])) 
    //Header("Location: ./login.html");

    include('../conexao/conexao.php');
    $id = trim($_REQUEST['id']);
    $rs = mysqli_query($conexao,"SELECT * FROM clientes WHERE cli_cod=".$id);
    $edita = mysqli_fetch_array($rs);
  
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Editar Clientes</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="css\edtStyle.css">    
    </head>
    <body  background="#"  >
    <br><br><br>
    <div class="container">
        <div class="box">
          <h3><span class="badge badge-light">Editar Clientes</span></h3>
            
            <form id="frmEdtCli" name="frmEdtCli" method="POST" action="edtCli.php">
                <div class="form-group">
                    <label for="lblId"><span class="badge badge-light">ID: </span>  </label>
                    <input type="text" id="txtId" name="txtId" class="form-control col-md-12"readonly="true" value="<?php echo $edita['cli_cod'] ?>">
                </div>      
                <div class="form-group">
                    <label for="lblCli"><span class="badge badge-light">Cliente: </span></label>
                    <input type="text" id="txtNome" name="txtNome" class="form-control col-md-12" value="<?php echo utf8_encode($edita['cli_nome']) ?>">
                </div>
                <div class="form-group">
                    <label for="lblCPF"><span class="badge badge-light">CPF: </span>  </label>
                    <input type="text" id="txtCPF" name="txtCPF" class="form-control col-md-12" value="<?php echo $edita['cli_cpf'] ?>">
                </div> 
                <div class="form-group">
                    <label for="lblCel"><span class="badge badge-light">Celular: </span>  </label>
                    <input type="text" id="txtCel" name="txtCel" class="form-control col-md-12" value="<?php echo $edita['cli_celular'] ?>">
                </div> 
                 <div class="form-group">
                    <label for="lblEnd"><span class="badge badge-light">Endereço: </span></label>
                    <input type="text" id="txtEnd" name="txtEnd" class="form-control col-md-12" value="<?php echo utf8_encode($edita['cli_endereco']) ?>">
                </div>
            
                <input type="submit" id="btEnviar" name="btEnviar"
                    class="btn btn-light bt-lg" value="Atualizar">
                <input type="reset" id="btLimpar" name="btLimpar"
                    class="btn btn-secondary bt-lg" value="Limpar">
                <input type="button" id="btCancelar" name="btCancelar"
                    class="btn btn-dark bt-lg" value="Cancelar" onclick="javascript:location.href='lstCli.php'">
            </form>        
        </div>
    </body>
</html>