<?php
    
    //session_start();
    //if (!isset($_SESSION['user'])) 
      // Header("Location: ./login.html");
    
    include('../conexao/conexao.php');
    
    $id = $_POST['txtId'];
    
    if(!empty($id)){
        $sql = "DELETE FROM clientes WHERE cli_cod='$id';";
        
        $rem = mysqli_query($conexao,$sql);
        
            if(!$rem){
            echo "Erro ao remover...";
        } else{
            echo '<script>alert("Cliente removido com sucesso!")</script>';
            echo '<script>window.location="lstCli.php"</script>';
        }
    }else{
        echo '<script>alert("Selecione o Cliente!")</script>';
            echo '<script>window.location="lstCli.php"</script>';
    };    
?>