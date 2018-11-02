<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title> Sobre </title>

    <link rel="shortcut icon" href="//virtual.ifro.edu.br/jiparana/pluginfile.php/1/theme_essential/favicon/1535988245/favicon.ico">

    <!-- PROPRIO -->
    <link rel="stylesheet" type="text/css" href="../../css/css.css">
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
      <a href="#" class="brand no-hover">
        <img src="https://www.planet-source-code.com/vb/2010Redesign/images/LangugeHomePages/HTML5_CSS_JavaScript.png" height="40" class="d-inline-block align-top" alt="">
      </a>
      <ul class="app-bar-menu">
        <a class="btn btn-light" href="../index.php">Início</a>
        <a class="btn btn-light" href="#">Contato</a>
        <a class="btn btn-light" href="sobre.php">Sobre</a>
        <a class="btn btn-light" href="../portal/index_portal.php">Home Admin</a>
      </ul> <!-- app-bar-menu -->
    </div>
    <!-- END-MENU -->

    <!-- CORPO -->
    <div id="Conteiner-Principal">

      <div class='imagem-capa capa-sobre'>
        <div class='texto-capa texto-sobre'>
          <h1 class="hello">StanLee</h1>
          <h2 class="index hello">Sistema online de gestão empresarial</h2>
          <h3 class="index hello">O úncio que esta em qualquer lugar, em qualquer momento</h3>
        </div> <!-- imagem-capa -->
      </div> <!-- texto-capa -->

      <div id="sub">
        <section id="sobre">
          <div class="container">
            <div class="row row-ef">
              <div class="col-lg-12 text-center">
                <h2 class="hello sub section-heading">Gestão empresarial online</h2>
                <hr class="primary">
              </div> <!-- col-lg-12 text-center -->
            </div> <!-- row row-ef -->
          </div> <!-- container -->
          <div class="container ir">
            <div class="row row-ef text-center">
              <p class="text-sobre">
                Seja bem vindo ao sistema <b>StanLee</b><br />
                É um sistema de gestão de empresa bastante prático e amigável até para o usuários com pouca habilidade com computadores.<br />
                Uma das de suas características de destaque é a sua interface agradável, menus e submenus definidos que facilitam o trabalho do usuário.<br />
                <b>Adminstradores</b> de pequenas e grandes empresas têm acesso aos dados cruciais de seus empregados cadastrados. </p>
            </div> <!-- row row-ef -->
          </div> <!-- container ir -->
        </section> <!-- sobre -->
      </div> <!-- sub -->

    </div><!-- Conteiner-Conteudo -->
  </div> <!-- Conteiner-Principal -->

    <div class="footer">
      <p class="footer_font">@2018 Foperoma</p>
    </div>

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!-- JS METRO UI -->
    <script src="https://cdn.metroui.org.ua/v4/js/metro.min.js"></script>

    <!-- BOOSTRAP -->
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
    <!-- . -->

  </body>
</html>
