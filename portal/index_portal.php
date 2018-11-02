<?php include('acesso_portal/check_login.php');?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title> Portal Administrador </title>

    <link rel="shortcut icon" href="//virtual.ifro.edu.br/jiparana/pluginfile.php/1/theme_essential/favicon/1535988245/favicon.ico">

    <!-- PROPRIO -->
    <link rel="stylesheet" type="text/css" href="../../css/css.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/portal.css">
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
    <?php include('../inc/menu.php'); ?>
    <!-- END-MENU -->

    <!-- CORPO -->
    <div id="Conteiner-Principal">
      <div id="Conteiner-Conteudo">

        <div class='imagem-capa capa-portal'>
          <div class='texto-capa texto-capa-index'>
            <h1 class="hello">Portal do Administrador</h1>
            <div class="sumir">
            <h2 class="index hello">Sistema online de gestão empresarial</h2>
            <h3 class="index hello">O úncio que esta em qualquer lugar, em qualquer momento</h3>
          </div> <!-- sumir -->
          </div> <!-- imagem-capa -->
        </div> <!-- texto-capa -->

        <div id="wrapper">
          <div id="pagebody">
            <div id="content">
                <h1 class="linha_baixo">Ultimas Atualizações</h1>
              <br />
              <h2>Ultimo Cliente cadastrado</h2>
              <span><b></b>, cargo.</span>
              <br />
              <br />
              <h2> Total de Funcionários </h2>
              <span>X funcação</span><br />
              <span>X funcação</span><br />
              <span>X funcação</span><br />


            </div><!-- Fim da div content -->
          </div> <!--fim da pagebody -->
          <div id="lateral">
            <div id="nav">
              <div id="menu">

                <div class="item">
                  <h3 class="link-titulo">Funcionários</h3>
                  <ul class="box">
                    <li><a href="funcionario/cadastrar/cadastrar.php" class="servicos_link">Cadastrar</a></li>
                    <li><a href="funcionario/lista.php" class="servicos_link">Informações</a></li>
                  </ul>
                </div>

              </div>
            </div>
          </div>

        </div><!-- Conteiner-Conteudo -->
      </div> <!-- Conteiner-Principal -->
      <div class="footer">
        <p class="footer_font">@2018 EisenFonseca</p>
      </div>

      <!-- JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
      <!-- JS METRO UI -->
      <script src="https://cdn.metroui.org.ua/v4/js/metro.min.js"></script>

      <!-- BOOSTRAP -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

      <!-- Deslizar Pagina -->
      <script>
      $('.ir a[href^="#"]').on('click', function(e) {
        e.preventDefault();
        var id = $(this).attr('href'),
        targetOffset = $(id).offset().top;

        $('html, body').animate({
          scrollTop: targetOffset - 100
        }, 500);
      });
      </script>

    </body>
</html>
