<?php 
session_start();
//if (!isset($_SESSION['user'])) 
  // Header("Location: ./login.html");
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Relatório de Usuários por período</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="css\insStyle.css">    
    </head>

    <body  background="#" >
        <br><br><br>
            <div class="container">
                <div class="box">
                  <h3><span class="badge badge-light">Relatório de Usuários por período</span></h3>
            <form id="frmRelUsu" name="frmRelUsu" method="POST" action="relUsuPeriodo.php">
                
                <div class="form-group">
                    <label for="lblData1"><span class="badge badge-light">Data 1: </span></label>
                    <input type="date" class="form-control col-md-2" id="data1"
                        name="data1" >          
                </div>

                <div class="form-group">
                    <label for="lblData2"><span class="badge badge-light">Data 2: </span></label>
                    <input type="date" class="form-control col-md-2" id="data2"
                        name="data2" >          
                </div>

                               
                
                <input type="submit" id="btEnviar" name="btEnviar"
                    class="btn btn-light" value="Enviar">
                <input type="reset" id="btLimpar" name="btLimpar"
                    class="btn btn-secondary" value="Limpar">
                    </div>
            </form> 
            </div>
        </div>
    </body>
</html>