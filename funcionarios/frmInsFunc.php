<?php 
session_start();
//if (!isset($_SESSION['user'])) 
  // Header("Location: ./login.html");
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Cadastro de Funcinários</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="css\insStyle.css">    
    </head>

    <body  background="#"  >
        <br><br><br>
            <div class="container">
                <div class="box">
                  <h3><span class="badge badge-light">Inserir Funcionários</span></h3>
            <form id="frmNovoFunc" name="frmNovoFunc" method="POST" action="insFunc.php">
                
                <div class="form-group">
                    <label for="lblNome"><span class="badge badge-light">Nome: </span></label>
                    <input type="text" class="form-control col-md-12" id="txtNome"
                        name="txtNome" placeholder="Informe o nome do Produto">               
                </div>

                <div class="form-group">
                    <label for="lblUsu"><span class="badge badge-light ">Usuário: </span> </label>
                    <select class="form-control" name="selUsu" id="selUsu">
                        <option value="opFuncUsu">Selecione o Usuário</option>
                        <?php
                            include('../conexao/conexao.php');
                         
                            $consulta=mysqli_query($conexao,"SELECT *FROM usuarios order by usu_nome ASC"); 
                    
                            while ($dados = mysqli_fetch_array($consulta)) {
                            echo utf8_encode("<option value='".$dados['usu_cod']."'>".$dados['usu_nome']."</option>");
                                } 
                        ?>
                    </select>
                </div>


                <div class="form-group">
                    <label for="lblCpf"><span class="badge badge-light">CPF: </span></label>
                    <input type="text" class="form-control col-md-12" id="txtCpf"
                        name="txtCpf" placeholder="Informe o CPF">               
                </div>

                <div class="form-group">
                    <label for="lblCel"><span class="badge badge-light">Celular: </span></label>
                    <input type="text" class="form-control col-md-12" id="txtCel"
                        name="txtCel" placeholder="Informe a Celular">               
                </div>

                <div class="form-group">
                    <label for="lblNasc"><span class="badge badge-light">Nascimento: </span></label>
                    <input type="text" class="form-control col-md-12" id="txtNasc"
                        name="txtNasc" placeholder="Informe a data de Nascimento">               
                </div>

                <div class="form-group">
                    <label for="lblCargo"><span class="badge badge-light">Cargo: </span></label>
                    <input type="text" class="form-control col-md-12" id="txtCargo"
                    name="txtCargo" placeholder="Informe o Cargo">               
                </div>
                               
                
                <input type="submit" id="btEnviar" name="btEnviar"
                    class="btn btn-light" value="Enviar">
                <input type="reset" id="btLimpar" name="btLimpar"
                    class="btn btn-secondary" value="Limpar">
                <input type="button" id="btCancelar" name="btCancelar"
                    class="btn btn-dark" value="Cancelar" onclick="javascript:location.href='lstFunc.php'">
                    </div>
            </form> 
            </div>
        </div>
    </body>
</html>