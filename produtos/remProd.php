<?php
    
    //session_start();
    //if (!isset($_SESSION['user'])) 
      // Header("Location: ./login.html");
    
    include('../conexao/conexao.php');
    
    $id = $_POST['txtId'];
    
    if(!empty($id)){
        $sql = "DELETE FROM produtos WHERE prod_cod='$id';";
        
        $rem = mysqli_query($conexao,$sql);
              
         if(!$rem){
            echo "Erro ao remover...";
        } else{
            echo '<script>alert("Produto removido com sucesso!")</script>';
            echo '<script>window.location="lstProd.php"</script>';
        }
    }else{
        echo '<script>alert("Selecione o Produto!")</script>';
            echo '<script>window.location="lstProd.php"</script>';
    }; 