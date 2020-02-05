<?php
   
    session_start();
    //if (!isset($_SESSION['user'])) 
    //Header("Location: ./login.html");

    include('../conexao/conexao.php');
    $id = trim($_REQUEST['id']);
    $rs = mysqli_query($conexao,"SELECT * FROM categorias WHERE cat_cod=".$id);
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
          <h3><span class="badge badge-light">Editar Categorias</span></h3>
            
            <form id="frmEdtCat" name="frmEdtCat" method="POST" action="edtCat.php">
                <div class="form-group">
                    <label for="lblId"><span class="badge badge-light">ID: </span>  </label>
                    <input type="text" id="txtId" name="txtId" class="form-control col-md-12"readonly="true" value="<?php echo $edita['cat_cod'] ?>">
                </div>      
                <div class="form-group">
                    <label for="lblCat"><span class="badge badge-light">Categoria: </span></label>
                    <input type="text" id="txtNome" name="txtNome" class="form-control col-md-12" value="<?php echo utf8_encode($edita['cat_nome']) ?>">
                </div>
            
                <input type="submit" id="btEnviar" name="btEnviar"
                    class="btn btn-light bt-lg" value="Atualizar">
                <input type="reset" id="btLimpar" name="btLimpar"
                    class="btn btn-secondary bt-lg" value="Limpar">
                <input type="button" id="btCancelar" name="btCancelar"
                    class="btn btn-dark bt-lg" value="Cancelar" onclick="javascript:location.href='lstCat.php'">
            </form>        
        </div>
    </body>
</html>