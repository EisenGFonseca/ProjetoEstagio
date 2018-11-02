<?php include('portal/acesso_portal/check_login.php');?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title> Cadastrar </title>

    <link rel="shortcut icon" href="//virtual.ifro.edu.br/jiparana/pluginfile.php/1/theme_essential/favicon/1535988245/favicon.ico">
    <!-- CSS -->
    <?php include('inc/css.php'); ?>
    <!-- END-CSS -->
  </head>

  <body class="body1">

    <!-- MENU -->
    <?php include('inc/menu.php'); ?>
    <!-- END-MENU -->

    <!-- CORPO -->
    <div id="Conteiner-Principal">
    <div class='imagem-capa capa-cadastrar'>
      <div class='texto-capa texto-sobre'>
        <h1 class="hello">Cadastrar Funcionário</h1>
        <h2 class="index hello sumir">Preencha o Formulario abaixo</h2>
        <h3 class="index hello sumir">Caso selecione a função Administrador, o campo 'senha' será habilitado</h3>
      </div> <!-- imagem-capa -->
    </div> <!-- texto-capa -->

      <div id="wrapper">
        <div id="pagebody">
          <div id="content">

            </div><!-- Fim da div content -->
          </div> <!--fim da pagebody -->
          <div id="lateral" class="sumir">

            <!-- LATERAL -->
            <?php include('../../../inc/container-lateral.php'); ?>
            <!-- END LATERAL -->
          </div><!-- lateral -->

        </div><!-- Conteiner-Conteudo -->
      </div> <!-- Conteiner-Principal -->

      <!--FOOTER -->
      <?php include('inc/footer.php'); ?>
      <!-- END FOOTER-->

      <!-- JS -->
      <?php include('inc/js.php'); ?>
      <!-- END JS -->

  </body>
</html>
