<?php
    
    //session_start();
    //if (!isset($_SESSION['user'])) 
      // Header("Location: ./login.html");
    
    include('../conexao/conexao.php');
    
    $id = $_POST['txtId'];
    
    if(!empty($id)){
        $sql = "DELETE FROM funcionarios WHERE func_cod='$id';";
        
        $rem = mysqli_query($conexao,$sql);
        
          
         if(!$rem){
            echo "Erro ao remover...";
        } else{
            echo '<script>alert("Funcionário removido com sucesso!")</script>';
            echo '<script>window.location="lstFunc.php"</script>';
        }
    }else{
        echo '<script>alert("Selecione o Funcionario!")</script>';
            echo '<script>window.location="lstFunc.php"</script>';
    };        
?>
?>