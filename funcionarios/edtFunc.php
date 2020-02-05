<?php
    //session_start();
    //if (!isset($_SESSION['user'])) 
    //Header("Location: ./login.html");

    include('../conexao/conexao.php');
    
    $id = trim($_POST['txtId']);
    $nome = utf8_decode(trim($_POST['txtNome']));
    $usu = utf8_decode(trim($_POST['selUsu']));
    $cpf = trim($_POST['txtCpf']);
    $cel = trim($_POST['txtCel']);
    $nasc = trim($_POST['txtNasc']);
    $cargo = utf8_decode(trim($_POST['txtCargo']));

    if(!empty($nome)){
        $sql = "UPDATE funcionarios SET usu_cod='$usu', func_nome='$nome', func_cpf='$cpf', func_celular='$cel', func_data_nascimento='$nasc', func_cargo='$cargo' WHERE func_cod='$id';";
       
        $edt = mysqli_query($conexao,$sql);
        
        if(!$edt){
            echo "Erro na atualização...";
        } else{
            echo '<script>alert("Funcionário atualizado com sucesso!")</script>';
            echo '<script>window.location="lstFunc.php"</script>';
        }
    }
    else{
        echo '<script>alert("Campos em branco!")</script>';
            echo '<script>window.location="lstFunc.php"</script>';
    };   
?>