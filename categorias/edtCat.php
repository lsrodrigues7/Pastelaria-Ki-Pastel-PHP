<?php
    //session_start();
    //if (!isset($_SESSION['user'])) 
    //Header("Location: ./login.html");

    include('../conexao/conexao.php');
    
    $id = trim($_POST['txtId']);
    $nome = utf8_decode(trim($_POST['txtNome']));
    date_default_timezone_set("America/Sao_Paulo"); 
    $data=date('Y/m/d');


    if(!empty($nome)){
        $sql = "UPDATE categorias SET cat_nome='$nome', cat_data='$data' WHERE cat_cod='$id';";
        $edt = mysqli_query($conexao,$sql);
        
        
        if(!$edt){
            echo "Erro na atualização...";
        } else{
            echo '<script>alert("Categoria atualizada com sucesso!")</script>';
            echo '<script>window.location="lstCat.php"</script>';
        }
    }
    else{
        echo '<script>alert("Campo em branco! Informe o nome da categoria!")</script>';
            echo '<script>window.location="lstCat.php"</script>';
    };    
?>