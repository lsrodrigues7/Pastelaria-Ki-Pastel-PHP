<?php
    
    //session_start();
    //if (!isset($_SESSION['user'])) 
      // Header("Location: ./login.html");
    
    include('../conexao/conexao.php');
    
    $id = $_POST['txtId'];
    
    if(!empty($id)){
        $sql = "DELETE FROM usuarios WHERE usu_cod='$id';";
      
        $rem = mysqli_query($conexao,$sql);
        
        
         if(!$rem){
            echo "Erro ao remover...";
        } else{
            echo '<script>alert("Usuário removido com sucesso!")</script>';
            echo '<script>window.location="lstUsu.php"</script>';
        }
    }else{
        echo '<script>alert("Selecione a Usuário!")</script>';
            echo '<script>window.location="lstUsu.php"</script>';
    };        
?>