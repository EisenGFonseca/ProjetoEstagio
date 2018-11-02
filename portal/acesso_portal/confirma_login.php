<?php
  session_start();

  include('../../conexao/conexao.php');

  $email_fun = $_POST['email_fun'];
  $senha_adm = $_POST['senha_adm'];

  $query = "SELECT fun_nome, fun_email
                FROM admin LEFT JOIN funcionario ON fun_cod_fk = fun_cod
                WHERE fun_email = :email_fun AND adm_senha = :senha_adm";

  $consulta = $conn->prepare( $query );

  $consulta->bindParam(':email_fun', $email_fun);
  $consulta->bindParam(':senha_adm', $senha_adm);

  $resultado = $consulta->execute();

  if($resultado && $consulta->rowCount() == 1) {
    $usuario = $consulta->fetch(PDO::FETCH_OBJ);

    $_SESSION['user_nome'] = $usuario->fun_nome;
    $_SESSION['user_login'] = $usuario->fun_email;

    header("Location:../index_portal.php");
  } else {
    header("Location: login.php?error=1");
  }
?>
