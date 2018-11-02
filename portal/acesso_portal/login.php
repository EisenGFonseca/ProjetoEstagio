<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title> Login </title>

    <link rel="shortcut icon" href="//virtual.ifro.edu.br/jiparana/pluginfile.php/1/theme_essential/favicon/1535988245/favicon.ico">

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

  <body class="login">

    <!-- MENU -->
    <div data-role="appbar" data-expand-point="md">
      <a href="#" class="brand no-hover">
        <img src="https://www.planet-source-code.com/vb/2010Redesign/images/LangugeHomePages/HTML5_CSS_JavaScript.png" height="40" class="d-inline-block align-top" alt="">
      </a>
      <ul class="app-bar-menu">
        <a class="btn btn-light" href="../../../index.php">Início</a>
        <a class="btn btn-light" href="#">Contato</a>
        <a class="btn btn-light" href="../../../sobre/sobre.php">Sobre</a>
        <a class="btn btn-light" href="../index_portal.php">Home Admin</a>

      </ul> <!-- app-bar-menu -->
    </div>
    <!-- END-MENU -->

    <!-- CORPO -->
    <div id="Conteiner-Principal">

      <div class="form-area">
        <h2 class="hello">Efetue o login para prosseguir</h2>
        <br />
        <form class="needs-validation" novalidate name="Cadastro" action="confirma_login.php" method="post" onsubmit="return cadastrarPessoa();" >
          <p>Email:</p>
          <input  type="text" name="email_fun" placeholder="Email" class="form-control" id="validationCustom01" required>

          <p>Senha:</p>
          <input type="password" name="senha_adm"  placeholder="Senha" class="form-control" id="validationCustom01" required>

          <input type="submit" name="" value="Logar">

          <a href="">Esqueceu sua senha?</a>
        </form>
      </div>
    </div> <!-- Conteiner-Principal -->

    <div class="footer">
      <p class="footer_font">@2018 EisenFonseca</p>
    </div>

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <!-- JS METRO UI -->
    <script src="https://cdn.metroui.org.ua/v4/js/metro.min.js"></script>

    <!-- BOOSTRAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- validador -->
    <script>
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        var forms = document.getElementsByClassName('needs-validation');
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
              alert("Preencha todos os campos, por favor!");

            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
    </script>
    <!-- . -->

  </body>
</html>
