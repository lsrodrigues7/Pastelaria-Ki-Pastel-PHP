<?php 
session_start();
//if (!isset($_SESSION['user'])) 
  // Header("Location: ./login.html");
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Cadastro de Produtos</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="css\insStyle.css">    
    </head>

    <body  background="#"  >
        <br><br><br>
            <div class="container">
                <div class="box">
                  <h3><span class="badge badge-light">Inserir Produtos</span></h3>
            <form id="frmNovoProd" name="frmNovoProd" method="POST" action="insProd.php">
                
                <div class="form-group">
                    <label for="lblNome"><span class="badge badge-light">Nome: </span></label>
                    <input type="text" class="form-control col-md-12" id="txtNome"
                        name="txtNome" placeholder="Informe o nome do Produto">               
                </div>

                <div class="form-group">
                    <label for="lblCat"><span class="badge badge-light ">Categoria: </span> </label>
                    <select class="form-control" name="selCat" id="selCat">
                        <option value="opProdCat" disabled selected>Selecione a Categoria</option>
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
                        <option value="opProdForn" disabled selected hidden>Selecione o Fornecedor</option>
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
                        name="txtVal" placeholder="Informe o Valor">               
                </div>

                <div class="form-group">
                    <label for="lblQtd"><span class="badge badge-light">Quantidade: </span></label>
                    <input type="text" class="form-control col-md-12" id="txtQtd"
                        name="txtQtd" placeholder="Informe a Quantidade">               
                </div>

                               
                
                <input type="submit" id="btEnviar" name="btEnviar"
                    class="btn btn-light" value="Enviar">
                <input type="reset" id="btLimpar" name="btLimpar"
                    class="btn btn-secondary" value="Limpar">
                <input type="button" id="btCancelar" name="btCancelar"
                    class="btn btn-dark" value="Cancelar" onclick="javascript:location.href='lstProd.php'">
                    </div>
            </form> 
            </div>
        </div>
    </body>
</html>