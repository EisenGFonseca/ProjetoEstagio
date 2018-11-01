<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title> Sobre </title>

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

  <body class="body1">

    <!-- MENU -->
    <div data-role="appbar" data-expand-point="md">
      <a href="#" class="brand no-hover">
        <img src="../../../../img/Logo - Pestalozzi.png" height="30" class="d-inline-block align-top" alt="">
      </a>

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
          <a class="btn btn-light" href="../../../../index.php">Início</a>
          <a class="btn btn-light" href="#">Contato</a>
          <a class="btn btn-light" href="../../../sobre/sobre.php">Sobre</a>
          <a class="btn btn-light" href="../../index_portal.php">Home Admin</a>
        </ul>

        <ul class="app-bar-menu ml-auto collapsed" style="">
          <a class="btn btn-light" href="acesso_portal/logout.php"><b>USUÁRIO</b></a>
          <a class="btn btn-danger" href="acesso_portal/logout.php">Sair</a>
        </ul>
      </div>

    </div> <!-- END-MENU -->

    <!-- CORPO -->
    <div id="Conteiner-Principal">
      <h3 class=""><b>Contatos</b> > Cadastrar</h3>
      <div class='imagem-capa capa-cadastrar'>
        <div class='texto-capa texto-sobre'>
          <h1 class="hello">Cadastrar Funcionário</h1>
          <h2 class="index hello">Preencha o Formulario abaixo</h2>
          <h3 class="index hello">Caso queira cadastrar um adm, ative o segundo Formulario</h3>
        </div> <!-- imagem-capa -->
      </div> <!-- texto-capa -->

      <section id="cadastrar">
        <div id="Conteiner-Formulario">
          <h3 class="form">Formulario de Cadastro</h1>

            <form class="needs-validation" novalidate name="Cadastro" action="cadastrar_salvar.php" method="post" onsubmit="return cadastrarPessoa();" >
              <!-- nome -->
              <div class="form-group">
                <input name="fun_nome"type="text" class="form-control" placeholder="Nome Completo" class="form-control" id="validationCustom01" required>
              </div>
              <div class="row row-form">
                <!-- datanas -->
                <div class="cell-md-6 ajusta">
                  <input id="calendario" name="fun_dataNas" type="text" placeholder="Data de nascimento"  class="form-control" id="validationCustom01" required/>
                </div>
                <!-- sexo -->
                <div class="cell-md-6">
                  <select name="fun_sexo"class="custom-select" id="inputGroupSelect02">
                    <option value="null" selected>Sexo</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>
                  </select>
                </div>
              </div>

              <div class="row row-form">
                <!-- rg -->
                <div class="cell-md-6 ajusta">
                  <input name="fun_rg"type="text" class="form-control" placeholder="RG" class="form-control" id="validationCustom01" required>
                </div>
                <!-- cpf -->
                <div class="cell-md-6">
                  <input id="cpf" name="fun_cpf"type="text" class="form-control" placeholder="CPF" class="form-control" id="validationCustom01" required>
                </div>
              </div>

              <div class="row row-form">
                <!-- telefone -->
                <div class="cell-md-6 ajusta">
                  <input id="telefone" name="fun_telefone" type="text" class="form-control" placeholder="Telefone" class="form-control" id="validationCustom01" required>
                </div>
                <!-- celular -->
                <div class="cell-md-6">
                  <input id="celular" name="fun_celular" type="text" class="form-control" placeholder="Celular" class="form-control" id="validationCustom01" required>
                </div>
              </div>

              <div class="row row-form">
                <!-- rua -->
                <div class="cell-md-6 ajusta">
                  <input name="fun_rua"type="text" class="form-control" placeholder="Rua" class="form-control" id="validationCustom01" required>
                </div>
                <!-- numero -->
                <div class="cell-md-6">
                  <input name="fun_numero"type="text" class="form-control" placeholder="Numero" class="form-control" id="validationCustom01" required>
                </div>
              </div>

              <div class="row row-form">
                <!-- bairro -->
                <div class="cell-md-6 ajusta">
                  <input name="fun_bairro"type="text" class="form-control" placeholder="Bairro" class="form-control" id="validationCustom01" required>
                </div>
                <!-- cep -->
                <div class="cell-md-6">
                  <input name="fun_cep"type="text" class="form-control" placeholder="CEP" class="form-control" id="validationCustom01" required>
                </div>
              </div>

              <div class="row row-form">
                <!-- cidade -->
                <div class="cell-md-6 ajusta">
                  <input name="fun_cidade"type="text" class="form-control" placeholder="Cidade" class="form-control" id="validationCustom01" required>
                </div>
                <!-- estado -->
                <div class="cell-md-6">
                  <input id="estado" name="fun_estado"type="text" class="form-control" placeholder="Estado" class="form-control" id="validationCustom01" required>
                </div>
              </div>

              <div class="row row-form">
                <!-- funcao -->
                <div class="cell-md-6 ajusta">
                  <select name="fun_funcao"class="custom-select" id="funcao" onchange="optionCheck()">
                    <option value="null" selected>Função</option>
                    <option value="Gerente">Gerente</option>
                    <option value="Sub-Chefe">Sub-Chefe</option>
                    <option value="Chefe">Chefe</option>
                    <option value="Administração">Administrador</option>
                  </select>
                </div>
                <!-- Salario -->
                <div class="cell-md-6">
                  <input id="salario" name="fun_salario" type="text" class="form-control" placeholder="Salário" class="form-control" id="validationCustom01" required>
                </div>
              </div>

              <div class="row row-form">
                <!-- email -->
                <div class="cell-md-6 ajusta">
                  <input id="email" name="adm_email" type="email" class="form-control" placeholder="Email" class="form-control" id="validationCustom01" required disabled="disabled">
                </div>
                <!-- senha -->
                <div class="cell-md-6">
                  <input id="senha" name="adm_senha"type="password" class="form-control" placeholder="Senha" class="form-control" id="validationCustom01" required disabled="disabled">
                </div>
              </div>

              <div class="row row-form">
                <!-- pergunta -->
                <div class="cell-md-6 ajusta">
                  <select id="pergunta" name="adm_pergunta"class="custom-select" disabled="disabled">
                    <option value="null" selected>Pergunta de Segurança</option>
                    <option value="Prato">Qual é seu prato preferido?</option>
                    <option value="Animal">Qual foi o nome do seu primeiro animal de estimação?</option>
                    <option value="Celular">Qual foi seu primeiro número de celular?</option>
                    <option value="Mãe">Qual é o nome de solteira da sua mãe?</option>
                  </select>
                </div>
                <!-- resposta -->
                <div class="cell-md-6">
                  <input id="resposta" name="adm_resposta"type="text" class="form-control" placeholder="Resposta" class="form-control" id="validationCustom01" required disabled="disabled">
                </div>
              </div>

              <div class="botoes_form">
                <button type="submit"class="btn btn-success">Enviar</button>
                <button type="reset"class="btn btn-warning" >Limpar</button>
              </div>

            </form>
          </div><!--Conteiner_Formulário-->
        </section> <!-- sobre -->
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

    <!-- javascript -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.12/jquery.mask.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.12/jquery.mask.min.js"></script>

    <!-- AutoComplete -->
    <script>
    $(function() {
      var estados = [
        "Acre",
        "Alagoas",
        "Amapa",
        "Amazonas",
        "Bahia",
        "Ceará",
        "Destrito Federal",
        "Espirito Santo",
        "Goias",
        "Maranhao",
        "Mato Grosso",
        "Mato Grosso do Sul",
        "Minas Gerais",
        "Para",
        "Paraiba",
        "Paraná",
        "Pernambuco",
        "Piaui",
        "Rio de Janeiro",
        "Rio Grande do Norte",
        "Rio Grande do Sul",
        "Rondonia",
        "Roraima",
        "Santa Catarina",
        "Sao Paulo",
        "Sergipe",
        "Tocantins"
      ];
      $("#estado" ).autocomplete({
        source: estados
      });
    });
    </script>
    <!-- . -->

    <!-- calendario -->
    <script>
    $(function() {
      $("#calendario").datepicker({
        changeMonth: true,
        changeYear: true,
        dateFormat: 'dd/mm/yy',
        dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
        monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez']
      });
    });
    </script>
    <!-- . -->

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

    <!-- Mascara -->
    <script>
    $(document).ready(function(){
      $('#telefone').mask('9999-9999');
      $('#celular').mask('(99) 9 9999-9999');
      $('#cpf').mask('999.999.999-99');
      $('#calendario').mask('99/99/9999');
      $('#cep').mask('99.999-999');
      $('#salario').mask('000.000.000,00', { reverse : true});
    });
    </script>
    <!-- . -->

    <!-- Habilita/Desbilita -->
    <script type="text/javascript">
    document.getElementById( 'funcao' ).addEventListener( 'change', function(){
      if(this.value === 'Administração') {
        $( "#email" ).prop( "disabled", false );
        $( "#senha" ).prop( "disabled", false );
        $( "#pergunta" ).prop( "disabled", false );
        $( "#resposta" ).prop( "disabled", false );
      } else {
        $( "#email" ).prop( "disabled", true );
        $( "#senha" ).prop( "disabled", true );
        $( "#pergunta" ).prop( "disabled", true );
        $( "#resposta" ).prop( "disabled", true );
      }
    });
    </script>
    <!-- . -->

  </body>
</html>
