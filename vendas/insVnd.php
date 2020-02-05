<?php
    
    //session_start();
    //if (!isset($_SESSION['user'])) 
      // Header("Location: ./login.html");
    include('../conexao/conexao.php');

    $cli = utf8_decode(trim($_POST['selCliNome']));
    $func = utf8_decode(trim($_POST['selFuncNome']));
    $prod = utf8_decode(trim($_POST['selProdNome']));
    $val = trim($_POST['txtVal']);
    $qtd = trim($_POST['qtd']);
      date_default_timezone_set("America/Sao_Paulo");   
    $data = date('Y-m-d H:i:s');
   


    

    if(!empty($cli) && !empty($func) && !empty($prod) && !empty($val) && !empty($qtd)){
        $sql = "INSERT INTO vendas (cli_cod,func_cod,prod_cod,vnd_valor,vnd_qtd,vnd_data) VALUES ('$cli', '$func', '$prod', '$val','$qtd', '$data');";
        $ins = mysqli_query($conexao,$sql);
        var_dump($sql);
     if(!$ins){
            echo "Erro ao Inserir...";
        } else{
            echo '<script>alert("Venda inserida com sucesso!")</script>';
            echo '<script>window.location="lstVnd.php"</script>';
        }
    }else{
        echo '<script>alert("Preencha todos campos!")</script>';
            echo '<script>window.location="frmInsVnd.php"</script>';
    };  

?>