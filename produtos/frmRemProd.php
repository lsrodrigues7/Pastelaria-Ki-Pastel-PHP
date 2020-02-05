<?php
    
  //  session_start();
    //if (!isset($_SESSION['user'])) 
      // Header("Location: ./login.html");
    
    include('../conexao/conexao.php');

    $id = trim($_REQUEST['id']);
    $rs = mysqli_query($conexao,"SELECT produtos.prod_cod,produtos.cat_cod,produtos.prod_nome,produtos.prod_valor,produtos.prod_qtd,categorias.cat_cod, categorias.cat_nome as catNome, produtos.forn_cod, fornecedores.forn_cod,fornecedores.forn_nome as fornNome FROM produtos INNER JOIN categorias ON produtos.cat_cod=categorias.cat_cod INNER JOIN fornecedores ON produtos.forn_cod=fornecedores.forn_cod WHERE prod_cod=".$id);
    $exclui = mysqli_fetch_array($rs);

?>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <link rel="stylesheet" href="css\remStyle.css">    
    </head>
    <body  background="#"  >
    <br><br><br>
    <div class="container">
        <div class="box">
          <h3><span class="badge badge-light">Remover Produtos</span></h3>
          <form id="frmRemProd" name="frmRemProd" method="POST" action="remProd.php">
                
                <div class="form-group">
                    <label for="lblId">
                        <span class="badge badge-light">ID: </span>
                    </label>
                    <input type="text" id="txtId" name="txtId" readonly="true" class="form-control col-md-12" value="<?php echo $exclui['prod_cod'] ?>">
                </div>

                <div class="form-group">
                    <label for="lblNome">
                        <span class="badge badge-light ">Nome: </span>
                    </label>
                    <input type="text" id="txtNome" name="txtNome" readonly="true" class="form-control col-md-12" value="<?php echo utf8_encode($exclui['prod_nome']) ?>">
                    
                </div>

                <div class="form-group">
                    <label for="lblNome">
                        <span class="badge badge-light ">Categoria: </span>
                    </label>
                    <input type="text" id="txtCat" name="txtCat" readonly="true" class="form-control col-md-12" value="<?php echo utf8_encode($exclui['catNome']) ?>">
                </div>

                <div class="form-group">
                    <label for="lblForn">
                        <span class="badge badge-light ">Fornecedor: </span>
                    </label>
                    <input type="text" id="txtForn" name="txtForn" readonly="true" class="form-control col-md-12" value="<?php echo utf8_encode($exclui['fornNome']) ?>">
                    
                </div>

                <div class="form-group">
                    <label for="lblVal">
                        <span class="badge badge-light">Valor: </span>
                    </label>
                    <input type="text" id="txtVal" name="txtVal" readonly="true" class="form-control col-md-12" value="<?php echo $exclui['prod_valor'] ?>">
                </div>

                <div class="form-group">
                    <label for="lblQtd">
                        <span class="badge badge-light">Quantidade: </span>
                    </label>
                    <input type="text" id="txtQtd" name="txtQtd" readonly="true" class="form-control col-md-12" value="<?php echo $exclui['prod_qtd'] ?>">
                </div>

                <input type="submit" id="btConfirmar" name="btConfirmar"
                    class="btn btn-light " value="Confirmar">               
                <input type="button" id="btCancelar" name="btCancelar"
                    class="btn btn-dark " value="Cancelar" onclick="javascript:location.href='lstProd.php'"> 
          </form>
        </div>
      </div>
    </body>
</html>