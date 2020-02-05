<?php
    
    //session_start();
    //if (!isset($_SESSION['user'])) 
      // Header("Location: ./login.html");
    
    include('../conexao/conexao.php');
    
   
    $nome = utf8_decode(trim($_POST['txtNome']));
    $cpf = trim($_POST['txtCPF']);
    $cel = trim($_POST['txtCel']);
    $end = utf8_decode(trim($_POST['txtEnd']));
    date_default_timezone_set("America/Sao_Paulo"); 
    $data=date('Y-m-d');

    if(!empty($nome) && !empty($cel) && !empty($cpf)){
        $sql = "INSERT INTO clientes (cli_nome,cli_cpf,cli_celular,cli_endereco,cli_data) VALUES ('$nome', '$cpf', '$cel', '$end','$data');";
        
        $ins = mysqli_query($conexao,$sql);
      if(!$ins){
            echo "Erro ao Inserir...";
        } else{
            echo '<script>alert("Cliente inserido com sucesso!")</script>';
            echo '<script>window.location="lstCli.php"</script>';
        }
    }else{
        echo '<script>alert("Campos em branco! Preencha no mínimo o NOME, CPF e o CELULAR!")</script>';
            echo '<script>window.location="frmInsCli.php"</script>';
    };    

?>