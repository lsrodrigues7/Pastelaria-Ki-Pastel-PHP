<?php
    
    //session_start();
    //if (!isset($_SESSION['user'])) 
      // Header("Location: ./login.html");
    
    include('../conexao/conexao.php');
    
 
    $nome = utf8_decode(trim($_POST['txtNome']));
    date_default_timezone_set("America/Sao_Paulo"); 
    $data=date('Y-m-d');

    if(!empty($nome)){
        $sql = "INSERT INTO fornecedores (forn_nome,forn_data) VALUES ('$nome','$data');";
        
        $ins = mysqli_query($conexao,$sql);
        
     if(!$ins){
            echo "Erro ao Inserir...";
        } else{
            echo '<script>alert("Fornecedor inserido com sucesso!")</script>';
            echo '<script>window.location="lstForn.php"</script>';
        }
    }else{
        echo '<script>alert("Informe o nome do Fornecedor!")</script>';
            echo '<script>window.location="frmInsForn.php"</script>';
    };    
?>

?>