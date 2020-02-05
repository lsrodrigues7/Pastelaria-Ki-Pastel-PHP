<?php
    
    //session_start();
    //if (!isset($_SESSION['user'])) 
      // Header("Location: ./login.html");
    
    include('../conexao/conexao.php');
    
    $id = $_POST['txtId'];
    
    if(!empty($id)){
        $sql = "DELETE FROM fornecedores WHERE forn_cod='$id';";
       
        $rem = mysqli_query($conexao,$sql);
          
         if(!$rem){
            echo "Erro ao remover...";
        } else{
            echo '<script>alert("Fornecedor removido com sucesso!")</script>';
            echo '<script>window.location="lstForn.php"</script>';
        }
    }
    else{
        echo '<script>alert("Selecione o Fornecedor!")</script>';
            echo '<script>window.location="lstForn.php"</script>';
    };        
?>