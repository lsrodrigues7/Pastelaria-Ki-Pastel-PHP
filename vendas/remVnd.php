<?php
    
    //session_start();
    //if (!isset($_SESSION['user'])) 
      // Header("Location: ./login.html");
    
    include('../conexao/conexao.php');
    
    $id = $_POST['txtId'];
    
    if(!empty($id)){
        $sql = "DELETE FROM vendas WHERE vnd_cod='$id';";
    
        $rem = mysqli_query($conexao,$sql);
        
       if(!$rem){
            echo "Erro ao Inserir...";
        } else{
            echo '<script>alert("Venda removida com Sucesso!")</script>';
            echo '<script>window.location="lstVnd.php"</script>';
        }
    }else{
        echo "Campos em branco...";
    }      
?>