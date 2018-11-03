<?php
include('conexao/conexao.php');
	$sql = "SELECT * FROM funcionario";
	$consulta = $conn->prepare($sql);
	$consulta->execute();

	$registros = $consulta->fetchAll(PDO::FETCH_OBJ);
?>

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
					<h1 class="hello">Funcionários</h1>
					<h2 class="index hello sumir">Lista de empregados cadastrados</h2>
					<h3 class="index hello sumir">Clique em ver mais para ter acesso à seus dados</h3>
				</div> <!-- imagem-capa -->
			</div> <!-- texto-capa -->

			<div id="wrapper">
				<div id="pagebody">
					<div id="content">

						<div id="container-contatos">
              <div class="table-responsive-xl">
                <table class="table" data-sortable>
                  <!-- Tabelas-->
                  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"> -->
                   <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script> -->
                  <!-- . -->
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nome</th>
                      <th scope="col" class="sumir-tabela">Cargo</th>
                      <th scope="col" class="sumir-tabela">Celular</th>
                      <th scope="col">Email</th>
                      <th scope="col">Ação</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($registros as $registro) { ?>
                      <tr>
                        <th scope="row"><?php echo $registro->fun_cod; ?></th>
                        <td><?php echo $registro->fun_nome; ?></td>
                        <td class="sumir-tabela"><?php echo $registro->fun_funcao; ?></td>
                        <td class="sumir-tabela"><?php echo $registro->fun_celular; ?></td>
                        <td><?php echo $registro->fun_email; ?></td>
                        <td>
                          <a class="none" href="/portal/funcionario/fulano.php?fun_cod=<?php echo $registro->fun_cod; ?>"><button type="button" class="btn btn-info"> Ver Mais </button></a>
                          <!-- <a class="none" href="../atualizar/atualizar.php?fun_cod=<?php echo $registro->fun_cod; ?>"><button type="button" class="btn btn-warning"> Alterar </button></a>
                          <a class="none" href="deletar.php?fun_id=<?php echo $registro->fun_cod; ?>"><button type="button" class="btn btn-danger"> Deletar </button></a> -->
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>

					</div><!-- Fim da div content -->
				</div> <!--fim da pagebody -->

				<div id="lateral" class="sumir">
					<!-- LATERAL -->
					<?php include('inc/container-lateral.php'); ?>
					<!-- END LATERAL -->
				</div><!-- lateral -->

			</div><!-- Conteiner-Conteudo -->
		</div> <!-- Conteiner-Principal -->

		<!--FOOTER -->
		<?php include('inc/footer.php'); ?>
		<!-- END FOOTER-->

    <!-- CSS -->
    <?php include('inc/js.php'); ?>
    <!-- END-CSS -->

	</body>
</html>
