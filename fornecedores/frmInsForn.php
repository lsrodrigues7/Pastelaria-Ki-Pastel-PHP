<?php 
session_start();
//if (!isset($_SESSION['user'])) 
  // Header("Location: ./login.html");
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Cadastro de Fornecedores</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="css\insStyle.css">    
    </head>

    <body  background="#"  >
        <br><br><br>
            <div class="container">
                <div class="box">
                  <h3><span class="badge badge-light">Inserir Fornecedores</span></h3>
            <form id="frmNovoForn" name="frmNovoForn" method="POST" action="insForn.php">
                
                <div class="form-group">
                    <label for="lblNome"><span class="badge badge-light">Nome: </span></label>
                    <input type="text" class="form-control col-md-12" id="txtNome"
                        name="txtNome" placeholder="Informe o Nome do Fornecedor">               
                </div>
                               
                
                <input type="submit" id="btEnviar" name="btEnviar"
                    class="btn btn-light" value="Enviar">
                <input type="reset" id="btLimpar" name="btLimpar"
                    class="btn btn-secondary" value="Limpar">
                <input type="button" id="btCancelar" name="btCancelar"
                    class="btn btn-dark" value="Cancelar" onclick="javascript:location.href='lstForn.php'">
                    </div>
            </form> 
            </div>
        </div>
    </body>
</html>