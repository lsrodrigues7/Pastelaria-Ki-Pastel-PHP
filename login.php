<?php
   include('./conexao/conexao.php');

    $user = trim($_POST['user']);
    $pwd = trim($_POST['password']);
    //$pwd = md5($pwd); 

    $rs = mysqli_query($conexao,"SELECT * FROM  usuarios where usu_nick like '$user'");
       
    $linha = mysqli_fetch_array($rs); 

    if ($pwd==$linha['usu_senha']){
        session_start(); 

        $_SESSION['usu_nick'] = $user; 
        
        header('location:index.php'); 
    }
    elseif ($pwd!=$linha['usu_senha']){ 
        echo "<script language='javascript' type='text/javascript'>alert('Senha ou Login incorretos!');
        window.location.href='frmLogin.php';</script>";
        die();
         }

?>