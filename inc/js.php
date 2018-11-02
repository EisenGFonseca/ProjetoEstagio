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
    $('#telefone').mask('(99) 9999-9999');
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
    if(this.value === 'Administrador') {
      $( "#conf_senha" ).prop( "disabled", false );
      $( "#senha" ).prop( "disabled", false );
      $( "#pergunta" ).prop( "disabled", false );
      $( "#resposta" ).prop( "disabled", false );
    } else {
      $( "#conf_senha" ).prop( "disabled", true );
      $( "#senha" ).prop( "disabled", true );
      $( "#pergunta" ).prop( "disabled", true );
      $( "#resposta" ).prop( "disabled", true );
    }
  });
  </script>
  <!-- . -->
