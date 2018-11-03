<!-- JS -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<!-- BOOSTRAP -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<!-- JS METRO UI -->
<script src="https://cdn.metroui.org.ua/v4/js/metro.min.js"></script>
<!-- AJAX -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.12/jquery.mask.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.12/jquery.mask.min.js"></script>
<!-- AOS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<!-- validate -->
<script type="text/javascript">
function Cadastro(){
  var form = document.forms['Cadastro'];
  var senha = form.senha.value;
  var confirmar_senha = form.confirmar_senha.value;

	if (senha != confirmar_senha)
		alert("SENHAS DIFERENTES");
  }
  else {
    return true;
  }

  return false;
}
</script>

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

<!-- Habilita/Desbilita -->
<script type="text/javascript">
document.getElementById( 'funcao' ).addEventListener( 'change', function(){
  if(this.value === 'Administrador') {
    $( "#confirmar_senha" ).prop( "disabled", false );
    $( "#senha" ).prop( "disabled", false );
    $( "#pergunta" ).prop( "disabled", false );
    $( "#resposta" ).prop( "disabled", false );
  } else {
    $( "#confirmar_senha" ).prop( "disabled", true );
    $( "#senha" ).prop( "disabled", true );
    $( "#pergunta" ).prop( "disabled", true );
    $( "#resposta" ).prop( "disabled", true );
  }
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

<script>
function funcao_alerta()
{
  alert("Você escolheu deleatar o registro...");
}
</script>
