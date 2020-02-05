<?php
  session_start();
  unset ($_SESSION['usu_nick']); 
  session_destroy(); 
  header('location:frmLogin.php');    
?>