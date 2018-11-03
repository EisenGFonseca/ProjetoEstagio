<?php
  {
    include('acesso_portal/check_login.php');
  }
  {
    include('../conexao/conexao.php');
  	$sql = "SELECT * FROM funcionario WHERE last_insert_id();";
  	$consulta = $conn->prepare($sql);
  	$consulta->execute();

  	$registros = $consulta->fetchAll(PDO::FETCH_OBJ);
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title> Portal Administrador </title>

    <link rel="shortcut icon" href="//virtual.ifro.edu.br/jiparana/pluginfile.php/1/theme_essential/favicon/1535988245/favicon.ico">
    <!-- CSS -->
    <?php include('../inc/css.php'); ?>
    <!-- END-CSS -->
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
                <h1 class="linha_baixo">Sobre o Portal</h1>
                <br/>
                <h2> Agora você tem acesso total ao Sistema </h2>
                <span><b>Pode:</b></span><br />
                <span>cadastrar</span><br />
                <span>Editar</span><br />
                <span>e até mesmo demitir funcionarios</span><br />
                <br />
                <h2> Navegação </h2>
                <span>À esquerda, são algumas das páginas relacionadas aos empregados</span><br />

              </div><!-- Fim da div content -->
            </div> <!--fim da pagebody -->

            <div id="lateral" class="sumir">
              <!-- LATERAL -->
              <?php include('../inc/container-lateral.php'); ?>
              <!-- END LATERAL -->
            </div><!-- lateral -->

          </div><!-- Wrapper -->
        </div><!-- Conteiner-Conteudo -->
      </div> <!-- Conteiner-Principal -->

      <!--FOOTER -->
      <?php include('../inc/footer.php'); ?>
      <!-- END FOOTER-->

      <!-- JS -->
      <?php include('../inc/js.php'); ?>
      <!-- END JS -->

    </body>
    </html>
  </div><!-- Fim da div content -->
</div> <!--fim da pagebody -->
