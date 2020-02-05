<?php
    //session_start();
    //if (!isset($_SESSION['user'])) 
    //Header("Location: ./login.html");

    include('../conexao/conexao.php');
    
    $id = trim($_POST['txtId']);
    $cat = utf8_decode(trim($_POST['selCat']));
    $forn = utf8_decode(trim($_POST['selForn']));
    $nome = utf8_decode(trim($_POST['txtNome']));
    $valor = trim($_POST['txtVal']);
    $qtd = trim($_POST['txtQtd']);
    date_default_timezone_set("America/Sao_Paulo"); 
    $data=date('Y/m/d');


    if(!empty($nome) && !empty($cat) && !empty($forn) && !empty($valor) && !empty($qtd)){
        $sql = "UPDATE produtos SET cat_cod='$cat', forn_cod='$forn', prod_nome='$nome', prod_valor='$valor', prod_qtd='$qtd',prod_data='$data' WHERE prod_cod='$id';";
       
          $edt = mysqli_query($conexao,$sql);

        if(!$edt){
            echo "Erro na atualização...";
        } else{
            echo '<script>alert("Produto atualizado com sucesso!")</script>';
            echo '<script>window.location="lstProd.php"</script>';
        }
    }
    else{
        echo '<script>alert("Campos em branco! Preencha todos os campos!")</script>';
            echo '<script>window.location="lstProd.php"</script>';
    };   
?>