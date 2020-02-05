<?php 

 $_SESSION['usuario'] = 'Leonardo';
 $conexao = mysqli_connect("localhost","root","");
    if(!$conexao){
        echo "Erro ao se conectar com o mysql";
        exit;
    }
    $banco = mysqli_select_db($conexao,"kipastel");
    if(!$banco){
        echo "Erro ao se conectar com o banco MySql";
        exit;
    }

 ?>

