<?php
  session_start();

  include('../../conexao/conexao.php');

  $email_adm = $_POST['email_adm'];
  $senha_adm = $_POST['senha_adm'];
  $pergunta_adm = $_POST['pergunta_adm'];
  $resposta_adm = $_POST['resposta_adm'];

  $query = "SELECT admin.adm_email,
		               admin.adm_senha,
                   admin.adm_perguntaSeg,
                   admin.adm_resposta
                   FROM
                   admin
                   WHERE adm_email = :email_adm and
						             adm_senha = :senha_adm and
                         adm_perguntaSeg = :pergunta_adm and
                         adm_resposta = :resposta_adm";


  $consulta = $conn->prepare($query);

  $consulta->bindParam(':email_adm', $email_adm);
  $consulta->bindParam(':senha_adm', $senha_adm);
  $consulta->bindParam(':pergunta_adm', $pergunta_adm);
  $consulta->bindParam(':resposta_adm', $resposta_adm);

  $resultado = $consulta->execute();

  if($resultado && $consulta->rowCount() == 1) {
    $_SESSION['user_login'] = $email_adm;

    header("Location:../index_portal.php");
  } else {
    header("Location: login.php?error=1");
  }
?>
