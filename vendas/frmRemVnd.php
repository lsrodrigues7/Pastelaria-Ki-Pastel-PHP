<?php
    
  //  session_start();
    //if (!isset($_SESSION['user'])) 
      // Header("Location: ./login.html");
    
    include('../conexao/conexao.php');
    $id = trim($_REQUEST['id']);
    $rs = mysqli_query($conexao,"SELECT vendas.vnd_cod, vendas.vnd_valor, vendas.vnd_data, vendas.vnd_qtd, clientes.cli_cod, clientes.cli_nome, funcionarios.func_cod, funcionarios.func_nome, produtos.prod_cod, produtos.prod_nome  FROM vendas INNER JOIN clientes ON vendas.cli_cod=clientes.cli_cod INNER JOIN funcionarios ON vendas.func_cod=funcionarios.func_cod INNER JOIN produtos ON vendas.prod_cod=produtos.prod_cod WHERE vnd_cod=".$id);
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
          <h3><span class="badge badge-light">Remover Venda</span></h3>
          <form id="frmRemVnd" name="frmRemVnd" method="POST" action="remVnd.php">
                
                <div class="form-group">
                    <label for="lblId">
                        <span class="badge badge-light">Cod: </span>
                    </label>
                    <input type="text" id="txtId" name="txtId" readonly="true" class="form-control col-md-12" value="<?php echo $exclui['vnd_cod'] ?>">
                </div>

                <div class="form-group">
                    <label for="lblCli">
                        <span class="badge badge-light ">Cliente: </span>
                    </label>
                    <input type="text" id="txtCli" name="txtCli" readonly="true" class="form-control col-md-12" value="<?php echo utf8_encode($exclui['cli_nome']) ?>">
               </div>

                 <div class="form-group">
                    <label for="lblFunc">
                        <span class="badge badge-light ">Funcionário: </span>
                    </label>
                    <input type="text" id="txtFunc" name="txtFunc" readonly="true" class="form-control col-md-12" value="<?php echo utf8_encode($exclui['func_nome']) ?>">
               </div>

                 <div class="form-group">
                    <label for="lblProd">
                        <span class="badge badge-light ">Produto: </span>
                    </label>
                    <input type="text" id="txtProd" name="txtProd" readonly="true" class="form-control col-md-12" value="<?php echo utf8_encode($exclui['prod_nome']) ?>">
               </div>

                 <div class="form-group">
                    <label for="lblVal">
                        <span class="badge badge-light ">Valor: </span>
                    </label>
                    <input type="text" id="txtVal" name="txtVal" readonly="true" class="form-control col-md-12" value="<?php echo utf8_encode($exclui['vnd_valor']) ?>">
               </div>

                 <div class="form-group">
                    <label for="lblQtd">
                        <span class="badge badge-light ">Quantidade: </span>
                    </label>
                    <input type="text" id="txtQtd" name="txtQtd" readonly="true" class="form-control col-md-12" value="<?php echo utf8_encode($exclui['vnd_qtd']) ?>">
               </div>

                <input type="submit" id="btConfirmar" name="btConfirmar"
                    class="btn btn-light " value="Confirmar">               
                <input type="button" id="btCancelar" name="btCancelar"
                    class="btn btn-dark " value="Cancelar" onclick="javascript:location.href='lstVnd.php'"> 
          </form>
        </div>
      </div>
    </body>
</html>