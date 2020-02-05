<?php
   
    session_start();
    //if (!isset($_SESSION['user'])) 
    //Header("Location: ./login.html");

    include('../conexao/conexao.php');
    $id = trim($_REQUEST['id']);
    $rs = mysqli_query($conexao,"SELECT * FROM usuarios WHERE usu_cod=".$id);
    $edita = mysqli_fetch_array($rs);
  
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Editar Usuarios</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="css\insStyle.css">    
    </head>
    <body  background="#"  >
    <br><br><br>
    <div class="container">
        <div class="box">
          <h3><span class="badge badge-light">Editar Usuarios</span></h3>
            
            <form id="frmEdtUsu" name="frmEdtUsu" method="POST" action="edtUsu.php">
                <div class="form-group">
                    <label for="lblId"><span class="badge badge-light">ID: </span>  </label>
                    <input type="text" id="txtId" name="txtId" class="form-control col-md-12"readonly="true" value="<?php echo $edita['usu_cod'] ?>">
                </div>      
                <div class="form-group">
                    <label for="lblNome"><span class="badge badge-light">Nome: </span></label>
                    <input type="text" id="txtNome" name="txtNome" class="form-control col-md-12" value="<?php echo utf8_encode($edita['usu_nome']) ?>">
                </div>
                 <div class="form-group">
                    <label for="lblNick"><span class="badge badge-light">Apelido: </span></label>
                    <input type="text" id="txtNick" name="txtNick" class="form-control col-md-12" value="<?php echo utf8_encode($edita['usu_nick']) ?>">
                </div>
                  <div class="form-group">
                    <label for="lblSenha"><span class="badge badge-light">Senha: </span></label>
                    <input type="text" id="txtSenha" name="txtSenha" class="form-control col-md-12" value="<?php echo utf8_encode($edita['usu_senha']) ?>">
                </div>
            
                <input type="submit" id="btEnviar" name="btEnviar"
                    class="btn btn-light bt-lg" value="Atualizar">
                <input type="reset" id="btLimpar" name="btLimpar"
                    class="btn btn-secondary bt-lg" value="Limpar">
                <input type="button" id="btCancelar" name="btCancelar"
                    class="btn btn-dark bt-lg" value="Cancelar" onclick="javascript:location.href='lstUsu.php'">
            </form>        
        </div>
    </body>
</html>