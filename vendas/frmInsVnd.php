<?php 
session_start();
//if (!isset($_SESSION['user'])) 
  // Header("Location: ./login.html");
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Cadastro de Vendas</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="css/insStyle.css">    
    </head>

    <body  background="#"  >
        <br><br><br>
            <div class="container">
                <div class="box">
                  <h3><span class="badge badge-light">Inserir Vendas</span></h3>
            <form id="frmNovaVnd" name="frmNovaVnd" method="POST" action="insVnd.php">
                

                <div class="form-group">
                    <label for="lblCliNome"><span class="badge badge-light ">Nome do Cliente: </span> </label>
                    <select class="form-control" name="selCliNome" id="selCliNome">
                        <option value="opVndCliNome" disabled selected>Selecione o Cliente</option>
                        <?php
                            include('../conexao/conexao.php');
                         
                            $consulta=mysqli_query($conexao,"SELECT *FROM clientes order by cli_nome ASC"); 
                    
                            while ($dados = mysqli_fetch_array($consulta)) {
                            echo utf8_encode("<option value='".$dados['cli_cod']."'>".$dados['cli_nome']."</option>");
                                } 
                        ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="lblFuncNome"><span class="badge badge-light ">Nome do Funcionário: </span> </label>
                    <select class="form-control" name="selFuncNome" id="selFuncNome">
                        <option value="opVndFuncNome" disabled selected hidden>Selecione o Funcionário</option>
                        <?php
                            include('../conexao/conexao.php');
                         
                            $consulta=mysqli_query($conexao,"SELECT *FROM funcionarios order by func_nome ASC"); 
                    
                            while ($dados = mysqli_fetch_array($consulta)) {
                            echo utf8_encode("<option value='".$dados['func_cod']."'>".$dados['func_nome']."</option>");
                                } 
                        ?>
                    </select>
                </div>

                 <div class="form-group">
                    <label for="lblProdNome"><span class="badge badge-light ">Nome do Produto: </span> </label>
                    <select class="form-control" name="selProdNome" id="selProdNome">
                        <option value="opVndProdNome" disabled selected hidden>Selecione o Produto</option>
                        <?php
                            include('../conexao/conexao.php');
                         
                            $consulta=mysqli_query($conexao,"SELECT *FROM produtos order by prod_nome ASC"); 
                    
                            while ($dados = mysqli_fetch_array($consulta)) {
                            echo utf8_encode("<option value='".$dados['prod_cod']."'>".$dados['prod_nome']."</option>");
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
                    <input type="number" class="form-control col-md-12" id="qtd"
                        name="qtd" min="1" max="5" placeholder="Informe a Quantidade de 1 à 5">               
                </div>
                               
                
                <input type="submit" id="btEnviar" name="btEnviar"
                    class="btn btn-light" value="Enviar">
                <input type="reset" id="btLimpar" name="btLimpar"
                    class="btn btn-secondary" value="Limpar">
                <input type="button" id="btCancelar" name="btCancelar"
                    class="btn btn-dark" value="Cancelar" onclick="javascript:location.href='lstVnd.php'">
                    </div>
                </form> 
            </div>
        </div>
    </body>
</html>