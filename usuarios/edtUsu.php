<?php
    //session_start();
    //if (!isset($_SESSION['user'])) 
    //Header("Location: ./login.html");

    include('../conexao/conexao.php');
    
    $id = trim($_POST['txtId']);
    $nome = utf8_decode(trim($_POST['txtNome']));
    $nick = utf8_decode(trim($_POST['txtNick']));
    $senha = utf8_decode(trim($_POST['txtSenha']));


    if(!empty($nome) ){
        $sql = "UPDATE usuarios SET usu_nick='$nick',usu_senha='$senha',usu_nome='$nome' WHERE usu_cod='$id';";
        $edt = mysqli_query($conexao,$sql);
        
         
        if(!$edt){
            echo "Erro na atualização...";
        } else{
            echo '<script>alert("Usuário atualizado com sucesso!")</script>';
            echo '<script>window.location="lstUsu.php"</script>';
        }
    }
    else{
        echo '<script>alert("Campos em branco!")</script>';
            echo '<script>window.location="lstUsu.php"</script>';
    };      
?>