<?php
    
    //session_start();
    //if (!isset($_SESSION['user'])) 
      // Header("Location: ./login.html");
    
    include('../conexao/conexao.php');
    
    $id = $_POST['txtId'];
    
    if(!empty($id)){
        $sql = "DELETE FROM categorias WHERE cat_cod='$id';";
      
        $rem = mysqli_query($conexao,$sql);
        
         if(!$rem){
            echo "Erro ao remover...";
        } else{
            echo '<script>alert("Categoria removida com sucesso!")</script>';
            echo '<script>window.location="lstCat.php"</script>';
        }
    }else{
        echo '<script>alert("Selecione a Categoria!")</script>';
            echo '<script>window.location="lstCat.php"</script>';
    };        
?>