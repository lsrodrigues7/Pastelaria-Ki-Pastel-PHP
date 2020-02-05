<?php
    
    //session_start();
    //if (!isset($_SESSION['user'])) 
      // Header("Location: ./login.html");
    
    include('../conexao/conexao.php');
    
    
    $nome = utf8_decode(trim($_POST['txtNome']));
    $cat = utf8_decode(trim($_POST['selCat']));
    $forn = utf8_decode(trim($_POST['selForn']));
    $val = trim($_POST['txtVal']);
    $qtd = trim($_POST['txtQtd']);
    date_default_timezone_set("America/Sao_Paulo"); 
    $data=date('Y-m-d');

    if(!empty($nome) && !empty($cat) && !empty($forn) && !empty($val) && !empty($qtd)){
        $sql = "INSERT INTO produtos (cat_cod,forn_cod,prod_nome,prod_valor,prod_qtd,prod_data) VALUES ('$cat', '$forn', '$nome', '$val','$qtd','$data');";
        
        $ins = mysqli_query($conexao,$sql);
        
          if(!$ins){
            echo "Erro ao Inserir...";
        } else{
            echo '<script>alert("Produto Inserido com sucesso!")</script>';
            echo '<script>window.location="lstProd.php"</script>';
        }
    }
    else{
        echo '<script>alert("Campos em branco! Preencha todos os campos!")</script>';
            echo '<script>window.location="frmInsProd.php"</script>';
    };  

?>