<!DOCTYPE html>
<html>
<head>

  <!-- PROPRIO -->
  <link rel="stylesheet" type="text/css" href="../../../css/css.css">
  <!-- BOOTSTRAP -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <!-- METRO UI -->
  <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro.min.css">
  <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-all.min.css">
  <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-icons.min.css">
  <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-colors.min.css">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

</head>

<body class="body1">

  <!-- MENU -->
  <div data-role="appbar" data-expand-point="md">
    <div data-role="appbar" data-expand-point="md">
      <button type="button" class="hamburger menu-down hidden">
        <span class="line"></span>
        <span class="line"></span>
        <span class="line"></span>
      </button>
      <a href="#" class="brand no-hover">
        <img src="https://www.planet-source-code.com/vb/2010Redesign/images/LangugeHomePages/HTML5_CSS_JavaScript.png" height="40" class="d-inline-block align-top" alt="">
      </a>
      <ul class="app-bar-menu">
        <a class="btn btn-light" href="/index.php">Início</a>
        <a class="btn btn-light" href="#">Contato</a>
        <a class="btn btn-light" href="/sobre/sobre.php">Sobre</a>
        <a class="btn btn-light" href="/portal/index_portal.php">Sistema</a>
      </ul>

      <?php if(isset($_SESSION['user_nome'])) : ?>
        <ul class="app-bar-menu ml-auto collapsed" style="">
          <a class="btn btn-light" href="acesso_portal/logout.php"><b><?php echo $_SESSION['user_nome'] ?></b></a>
          <a class="btn btn-danger" href="acesso_portal/logout.php">Sair</a>
        </ul>
      <?php endif ?>
    </div>
  </ul>

  <!-- <ul class="app-bar-menu ml-auto collapsed" style="">
  <a class="btn btn-light" href="acesso_portal/logout.php"><b><?php echo $_SESSION['user_nome'] ?></b></a>
  <a class="btn btn-danger" href="acesso_portal/logout.php">Sair</a>
</ul> -->
</div>




<?php include('../inc/menu.php'); ?>
