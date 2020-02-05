<?php
    
    //session_start();
    //if (!isset($_SESSION['user'])) 
      // Header("Location: ./login.html");
    
    include('../conexao/conexao.php');
    

    $nome = utf8_decode(trim($_POST['txtNome']));
    date_default_timezone_set("America/Sao_Paulo"); 
    $data=date('Y-m-d');


    if(!empty($nome)){
        $sql = "INSERT INTO categorias (cat_nome,cat_data) VALUES ('$nome','$data');";
        
        $ins = mysqli_query($conexao,$sql);         
        if(!$ins){
            echo "Erro ao Inserir...";
        } else{
            echo '<script>alert("Categoria inserida com sucesso!")</script>';
            echo '<script>window.location="lstCat.php"</script>';
        }
    }else{
        echo '<script>alert("Informe o nome da Categoria!")</script>';
            echo '<script>window.location="frmInsCat.php"</script>';
    };    

?>