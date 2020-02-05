<?php
    //session_start();
    //if (!isset($_SESSION['user'])) 
    //Header("Location: ./login.html");

    include('../conexao/conexao.php');
    
    $id = trim($_POST['txtId']);
    $nome = utf8_decode(trim($_POST['txtNome']));
    $cpf = trim($_POST['txtCPF']);
    $cel = trim($_POST['txtCel']);
    $end = utf8_decode(trim($_POST['txtEnd']));


    if(!empty($nome)){
        $sql = "UPDATE clientes SET cli_nome='$nome', cli_cpf='$cpf', cli_celular='$cel', cli_endereco='$end' WHERE cli_cod='$id';";
        
        $edt = mysqli_query($conexao,$sql);
        
     if(!$edt){
            echo "Erro ao atualizar...";
        } else{
            echo '<script>alert("Cliente atualizado com sucesso!")</script>';
            echo '<script>window.location="lstCli.php"</script>';
        }
    }else{
       echo '<script>alert("Campos em branco! Preencha no mínimo o NOME!")</script>';
            echo '<script>window.location="lstCli.php"</script>';
    };   
?>