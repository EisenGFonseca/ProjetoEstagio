<?php
  session_start();

  if(!isset($_SESSION['user_login']) || !$_SESSION['user_login'])
    header('Location: acesso_portal/login.php');
?>
