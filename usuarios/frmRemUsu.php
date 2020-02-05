<?php
    
  //  session_start();
    //if (!isset($_SESSION['user'])) 
      // Header("Location: ./login.html");
    
    include('../conexao/conexao.php');
    $id = trim($_REQUEST['id']);
    $rs = mysqli_query($conexao,"SELECT * FROM usuarios WHERE usu_cod=".$id);
    $exclui = mysqli_fetch_array($rs);

?>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <link rel="stylesheet" href="css\insStyle.css">    
    </head>
    <body  background="#"  >
    <br><br><br>
    <div class="container">
        <div class="box">
          <h3><span class="badge badge-light">Remover Usuários</span></h3>
          <form id="frmRemUsu" name="frmRemUsu" method="POST" action="remUsu.php">
                <div class="form-group">
                    <label for="lblId">
                        <span class="badge badge-light">ID: </span>
                    </label>
                    <input type="text" id="txtId" name="txtId" readonly="true" class="form-control col-md-12" value="<?php echo $exclui['usu_cod'] ?>">
                </div>
                <div class="form-group">
                    <label for="lblNome">
                        <span class="badge badge-light ">Nome: </span>
                    </label>
                    <input type="text" id="txtNome" name="txtNome" readonly="true" class="form-control col-md-12" value="<?php echo utf8_encode($exclui['usu_nome']) ?>">
                    
               </div>
               <div class="form-group">
                    <label for="lblNick">
                        <span class="badge badge-light ">Apelido: </span>
                    </label>
                    <input type="text" id="txtNick" name="txtNick" readonly="true" class="form-control col-md-12" value="<?php echo utf8_encode($exclui['usu_nick']) ?>">
                    
               </div>
               <div class="form-group">
                    <label for="lblSenha">
                        <span class="badge badge-light ">Senha: </span>
                    </label>
                    <input type="text" id="txtSenha" name="txtSenha" readonly="true" class="form-control col-md-12" value="<?php echo utf8_encode($exclui['usu_senha']) ?>">
                    
               </div>
                <input type="submit" id="btConfirmar" name="btConfirmar"
                    class="btn btn-light " value="Confirmar">               
                <input type="button" id="btCancelar" name="btCancelar"
                    class="btn btn-dark " value="Cancelar" onclick="javascript:location.href='lstUsu.php'"> 
          </form>
        </div>
      </div>
    </body>
</html>