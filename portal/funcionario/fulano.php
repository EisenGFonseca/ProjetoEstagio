<?php include('../acesso_portal/check_login.php');?>

<?php
	include('../../conexao/conexao.php');

	// $fun_cod = $_GET['fun_cod'];
	
	if(empty($fun_cod = $_GET['fun_cod'])){
		header('location:lista.php');
	}else{

		$fun_cod = filter_var($_GET['fun_cod']);

		$sql = "SELECT * FROM funcionario INNER JOIN admin WHERE fun_cod = :fun_cod";

		$consulta = $conn->prepare($sql);
		$consulta->bindParam(':fun_cod', $fun_cod);
		$consulta->execute();

		$registro = $consulta->fetch(PDO::FETCH_OBJ);
	}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title> Cadastrar </title>

    <link rel="shortcut icon" href="//virtual.ifro.edu.br/jiparana/pluginfile.php/1/theme_essential/favicon/1535988245/favicon.ico">
    <!-- CSS -->
    <?php include('../../inc/css.php'); ?>
    <!-- END-CSS -->
  </head>

	<body class="body1">

		<!-- MENU -->
		<?php include('../../inc/menu.php'); ?>
		<!-- END-MENU -->

		<!-- CORPO -->
		<div id="Conteiner-Principal">
			<div class='imagem-capa capa-cadastrar'>
				<div class='texto-capa texto-sobre'>
					<h1 class="hello">Funcionário</h1>
					<h2 class="index hello">Detalhes sobre o empregado</h2>
					<h3 class="index hello sumir">continue</h3>
				</div> <!-- imagem-capa -->
			</div> <!-- texto-capa -->

			<div id="wrapper">
				<div id="pagebody">
					<div id="content">
						<div id="fulano">

							<h2 class="esq-preta barra"><b>Infomações Pessoais</b></h2>
							<h3 class="esq-preta barra-sub"><b>Pessoais</b></h2>
							<h4 class="esq-preta"><b>Nome Completo:</b> <?php echo $registro->fon_nome; ?></h4>
							<h4 class="esq-preta"><b>Dt. Nascimento:</b> <?php echo $registro->fun_dataNas; ?></h4>
							<h4 class="esq-preta"><b>Sexo:</b> <?php echo $registro->fun_sexo; ?></h4>
							<h4 class="esq-preta"><b>RG:</b> <?php echo $registro->fun_rg; ?></h4>
							<h4 class="esq-preta"><b>CPF:</b> <?php echo $registro->fun_cpf; ?></h4>
							<br />
							<h3 class="esq-preta barra-sub"><b>Contato</b></h2>
							<h4 class="esq-preta"><b>Telefone:</b> <?php echo $registro->fun_telefone; ?></h4>
							<h4 class="esq-preta"><b>Celular:</b> <?php echo $registro->fun_celular; ?></h4>
							<h4 class="esq-preta"><b>Email:</b> <?php echo $registro->fun_email; ?></h4>
							<br />
							<h3 class="esq-preta barra-sub"><b>Endereço</b></h2>
							<h4 class="esq-preta"><b>Rua:</b> <?php echo $registro->fun_rua; ?></h4>
							<h4 class="esq-preta"><b>Bairro:</b> <?php echo $registro->fun_bairro; ?></h4>
							<h4 class="esq-preta"><b>CEP:</b> <?php echo $registro->fun_cep; ?></h4>
							<h4 class="esq-preta"><b>Cidade::</b> <?php echo $registro->fun_cidade; ?></h4>
							<h4 class="esq-preta"><b>Estado:</b> <?php echo $registro->fun_estado; ?></h4>
							<br />
							<h3 class="esq-preta barra-sub"><b>Cargo</b></h2>
							<h4 class="esq-preta"><b>Função:</b> <?php echo $registro->fun_funcao; ?></h4>
							<h4 class="esq-preta"><b>Salário:</b> <?php echo $registro->fun_salario; ?></h4>
						</div><!-- fulano -->
					</div><!-- Fim da div content -->
				</div> <!--fim da pagebody -->

				<div id="lateral" class="sumir">
					<!-- LATERAL -->
					<?php include('../../inc/container-lateral.php'); ?>
					<!-- END LATERAL -->
				</div><!-- lateral -->

			</div><!-- Conteiner-Conteudo -->
		</div> <!-- Conteiner-Principal -->

		<!--FOOTER -->
		<?php include('../../inc/js.php'); ?>
		<!-- END FOOTER-->

		<!-- JS -->
		<?php include('../../inc/js.php'); ?>
		<!-- END JS -->

	</body>
</html>
