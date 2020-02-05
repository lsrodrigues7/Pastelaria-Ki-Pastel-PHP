<?php
    
    //session_start();
    //if (!isset($_SESSION['user'])) 
      // Header("Location: ./login.html");
    
    include('../conexao/conexao.php');
    
    
    $nome = utf8_decode(trim($_POST['txtNome']));
    $usu = utf8_decode(trim($_POST['selUsu']));
    $cpf = trim($_POST['txtCpf']);
    $cel = trim($_POST['txtCel']);
    $nasc = trim($_POST['txtNasc']);
    $cargo = utf8_decode(trim($_POST['txtCargo']));
    date_default_timezone_set("America/Sao_Paulo"); 
    $data=date('Y-m-d');

    if(!empty($nome) && !empty($cel) && !empty($cargo) && !empty($usu)){
        $sql = "INSERT INTO funcionarios (usu_cod, func_nome, func_cpf, func_celular, func_data_nascimento, func_cargo,func_data) VALUES ('$usu', '$nome', '$cpf', '$cel', '$nasc', '$cargo','$data');";
    
        $ins = mysqli_query($conexao,$sql);

        if(!$ins){
            echo "Erro ao Inserir...";
        } else{
            echo '<script>alert("Funcionário inserido com sucesso!")</script>';
            echo '<script>window.location="lstFunc.php"</script>';
        }
    }else{
        echo '<script>alert("Campos em Branco! Informe no mínimo o USUÁRIO, NOME, CELULAR E CARGO!")</script>';
        echo '<script>window.location="frmInsFunc.php"</script>';
    };    
?>