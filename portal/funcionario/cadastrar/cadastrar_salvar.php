<?php include('../../acesso_portal/check_login.php');?>

<?php

	include('../../../conexao/conexao.php');

	$fun_nome = $_POST['fun_nome'];
	$fun_dataNas = $_POST['fun_dataNas'];
	$fun_sexo = $_POST['fun_sexo'];
	$fun_rg = $_POST['fun_rg'];
	$fun_cpf = $_POST['fun_cpf'];
	$fun_telefone = $_POST['fun_telefone'];
	$fun_celular = $_POST['fun_celular'];
	$fun_email = $_POST['fun_email'];
	$fun_rua = $_POST['fun_rua'];
	$fun_numero = $_POST['fun_numero'];
	$fun_bairro = $_POST['fun_bairro'];
	$fun_cep = $_POST['fun_cep'];
	$fun_cidade = $_POST['fun_cidade'];
	$fun_estado = $_POST['fun_estado'];
	$fun_funcao = $_POST['fun_funcao'];
	$fun_salario = $_POST['fun_salario'];

	$adm_senha = $_POST['adm_senha'];

	$sql = "INSERT INTO funcionario VALUES (NULL, :fun_nome,
																								:fun_dataNas,
																								:fun_sexo,
																								:fun_rg,
																								:fun_cpf,
																								:fun_celular,
																								:fun_telefone,
																								:fun_email,
																								:fun_rua,
																								:fun_numero,
																								:fun_bairro,
																								:fun_cep,
																								:fun_cidade,
																								:fun_estado,
																								:fun_funcao,
																								:fun_salario);";

	if($fun_funcao == 'Administrador'){
		$sql.= "INSERT INTO admin VALUES (null, :adm_senha, last_insert_id())";
	}

	$inserir = $conn->prepare($sql);

	$inserir->bindParam( ':fun_nome', $fun_nome);
	$inserir->bindParam( ':fun_dataNas', $fun_dataNas);
	$inserir->bindParam( ':fun_sexo', $fun_sexo);
	$inserir->bindParam( ':fun_rg', $fun_rg);
	$inserir->bindParam( ':fun_cpf', $fun_cpf);
	$inserir->bindParam( ':fun_telefone', $fun_telefone);
	$inserir->bindParam( ':fun_celular', $fun_celular);
	$inserir->bindParam( ':fun_email', $fun_email);
	$inserir->bindParam( ':fun_rua', $fun_rua);
	$inserir->bindParam( ':fun_numero', $fun_numero);
	$inserir->bindParam( ':fun_bairro', $fun_bairro);
	$inserir->bindParam( ':fun_cep', $fun_cep);
	$inserir->bindParam( ':fun_cidade', $fun_cidade);
	$inserir->bindParam( ':fun_estado', $fun_estado);
	$inserir->bindParam( ':fun_funcao', $fun_funcao);
	$inserir->bindParam( ':fun_salario', $fun_salario);

	// $id = $conn->lastInsertId();

	if($fun_funcao == 'Administrador'){
		$inserir->bindParam(':adm_senha', $adm_senha);
	}

	$resultado = $inserir->execute();

	// var_dump ($inserir->errorInfo());
	// exit;
?>

<?php
include('../../../conexao/conexao.php');
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
    <?php include('../../../inc/css.php'); ?>
    <!-- END-CSS -->
  </head>

	<body class="body1">

		<!-- MENU -->
		<?php include('../../../inc/menu.php'); ?>
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

						<!-- TABELA FUN -->
						<?php include('../../../inc/tabela-fun.php'); ?>
						<!-- END TABELA FUN -->

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
		<?php include('../../../inc/js.php'); ?>
		<!-- END FOOTER-->

		<!-- JS -->
		<?php include('../../../inc/js.php'); ?>
		<!-- END JS -->

	</body>
</html>
