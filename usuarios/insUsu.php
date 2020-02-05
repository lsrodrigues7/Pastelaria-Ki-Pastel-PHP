<?php
    
    //session_start();
    //if (!isset($_SESSION['user'])) 
      // Header("Location: ./login.html");
    
    include('../conexao/conexao.php');
    
    $nome = utf8_decode(trim($_POST['txtNome']));
    $nick = utf8_decode(trim($_POST['txtNick']));
    $senha = utf8_decode(trim($_POST['txtSenha']));
    date_default_timezone_set("America/Sao_Paulo"); 
    $data=date('Y-m-d');


    if(!empty($nome) && !empty($nick) && !empty($senha)){
        $sql = "INSERT INTO usuarios (usu_nick,usu_senha,usu_nome, usu_data) VALUES ('$nick','$senha','$nome','$data');";
        $ins = mysqli_query($conexao,$sql);
        
        if(!$ins){
            echo "Erro ao Inserir...";
        } else{
            echo '<script>alert("Usuário inserido com sucesso!")</script>';
            echo '<script>window.location="lstUsu.php"</script>';
        }
    }else{
        echo '<script>alert("Preencha todos campos!")</script>';
            echo '<script>window.location="frmInsUsu.php"</script>';
    };  

?>