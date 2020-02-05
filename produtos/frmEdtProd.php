<?php
   
    session_start();
    //if (!isset($_SESSION['user'])) 
    //Header("Location: ./login.html");

    include('../conexao/conexao.php');
    $id = trim($_REQUEST['id']);
    $rs = mysqli_query($conexao,"SELECT produtos.prod_cod,produtos.cat_cod,produtos.prod_nome,produtos.prod_valor,produtos.prod_qtd,categorias.cat_cod, categorias.cat_nome as catNome, produtos.forn_cod, fornecedores.forn_cod,fornecedores.forn_nome as fornNome FROM produtos INNER JOIN categorias ON produtos.cat_cod=categorias.cat_cod INNER JOIN fornecedores ON produtos.forn_cod=fornecedores.forn_cod WHERE prod_cod=".$id);
    $edita = mysqli_fetch_array($rs);
  
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Editar Categorias</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="css\edtStyle.css">    
    </head>
    <body  background="#"  >
    <br><br><br>
    <div class="container">
        <div class="box">
          <h3><span class="badge badge-light">Editar Produtos</span></h3>
            
            <form id="frmEdtProd" name="frmEdtProd" method="POST" action="edtProd.php">

                <div class="form-group">
                    <label for="lblId"><span class="badge badge-light">ID: </span>  </label>
                    <input type="text" class="form-control col-md-12" id="txtId" name="txtId" readonly="true" value="<?php echo $edita['prod_cod'] ?>">
                </div>

                <div class="form-group">
                    <label for="lblNome"><span class="badge badge-light">Nome: </span></label>
                    <input type="text" class="form-control col-md-12" id="txtNome"
                        name="txtNome" value="<?php echo $edita['prod_nome'] ?>" placeholder="Informe o nome do Produto">               
                </div>

                <div class="form-group">
                    <label for="lblCat"><span class="badge badge-light ">Categoria: </span> </label>
                    <select class="form-control" name="selCat" id="selCat">
                        <option value="opEdtProdCat" disabled selected hidden><?php echo utf8_encode($edita['catNome']) ?></option>
                        <?php
                            include('../conexao/conexao.php');
                         
                            $consulta=mysqli_query($conexao,"SELECT *FROM categorias order by cat_nome ASC"); 
                    
                            while ($dados = mysqli_fetch_array($consulta)) {
                            echo utf8_encode("<option value='".$dados['cat_cod']."'>".$dados['cat_nome']."</option>");
                                } 
                        ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="lblForn"><span class="badge badge-light ">Fornecedores: </span> </label>
                    <select class="form-control" name="selForn" id="selForn">
                        <option value="opEdtProdForn" disabled selected hidden><?php echo utf8_encode($edita['fornNome']) ?></option>
                        <?php
                            include('../conexao/conexao.php');
                         
                            $consulta=mysqli_query($conexao,"SELECT *FROM fornecedores order by forn_nome ASC"); 
                    
                            while ($dados = mysqli_fetch_array($consulta)) {
                            echo utf8_encode("<option value='".$dados['forn_cod']."'>".$dados['forn_nome']."</option>");
                                } 
                        ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="lblVal"><span class="badge badge-light">Valor: </span></label>
                    <input type="text" class="form-control col-md-12" id="txtVal"
                        name="txtVal"  value="<?php echo $edita['prod_valor'] ?>" placeholder="Informe o Valor">               
                </div>

                <div class="form-group">
                    <label for="lblQtd"><span class="badge badge-light">Quantidade: </span></label>
                    <input type="text" class="form-control col-md-12" id="txtQtd"
                        name="txtQtd" value="<?php echo $edita['prod_qtd'] ?>" placeholder="Informe a Quantidade">               
                </div>

                <input type="submit" id="btEnviar" name="btEnviar"
                    class="btn btn-light bt-lg" value="Atualizar">
                <input type="reset" id="btLimpar" name="btLimpar"
                    class="btn btn-secondary bt-lg" value="Limpar">
                <input type="button" id="btCancelar" name="btCancelar"
                    class="btn btn-dark bt-lg" value="Cancelar" onclick="javascript:location.href='lstProd.php'">
            </form>        
        </div>
    </body>
</html>