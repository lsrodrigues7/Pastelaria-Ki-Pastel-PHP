<?php
    //session_start();
    //if (!isset($_SESSION['user'])) 
    //Header("Location: ./login.html");

    include('../conexao/conexao.php');
    
    $id = trim($_POST['txtId']);
    $nome = utf8_decode(trim($_POST['txtNome']));


    if(!empty($nome) ){
        $sql = "UPDATE fornecedores SET forn_nome='$nome' WHERE forn_cod='$id';";
        $edt = mysqli_query($conexao,$sql);
        
          if(!$edt){
            echo "Erro no atualização...";
        } else{
            echo '<script>alert("Fornecedor atualizado com sucesso!")</script>';
            echo '<script>window.location="lstForn.php"</script>';
        }
    }
    else{
        echo '<script>alert("Campo em branco! Informe o nome do fornecedor!")</script>';
            echo '<script>window.location="lstForn.php"</script>';
    };    
?>