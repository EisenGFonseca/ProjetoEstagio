<?php include('../../acesso_portal/check_login.php');?>

<?php
	include('../../../conexao/conexao.php');

		$fun_nome = filter_var($_POST['fun_nome']);
		$fun_dataNas = filter_var($_POST['fun_dataNas']);
		$fun_sexo = filter_var($_POST['fun_sexo']);
		$fun_rg = filter_var($_POST['fun_rg']);
		$fun_cpf = filter_var($_POST['fun_cpf']);
		$fun_telefone = filter_var($_POST['fun_telefone']);
		$fun_celular = filter_var($_POST['fun_celular']);
		$fun_email = filter_var($_POST['fun_email']);
		$fun_rua = filter_var($_POST['fun_rua']);
		$fun_numero = filter_var($_POST['fun_numero']);
		$fun_bairro = filter_var($_POST['fun_bairro']);
		$fun_cep = filter_var($_POST['fun_cep']);
		$fun_cidade = filter_var($_POST['fun_cidade']);
		$fun_estado = filter_var($_POST['fun_estado']);

		$sql = "UPDATE funcionario SET fun_nome = :fun_nome,
																	 fun_dataNas = :fun_dataNas,
																	 fun_sexo = :fun_sexo,
																	 fun_rg = :fun_rg,
																	 fun_cpf = :fun_cpf,
																	 fun_telefone = :fun_telefone,
																	 fun_celular = :fun_celular,
																	 fun_email = :fun_email,
																	 fun_rua = :fun_rua,
																	 fun_numero = :fun_numero,
																	 fun_bairro = :fun_bairro,
																	 fun_cep = :fun_cep,
																	 fun_cidade = :fun_cidade,
																	 fun_estado = :fun_estado
															WHERE fun_cod = :fun_cod";

		$update = $conn->prepare($sql);

		$update->bindParam(':fun_cod', $fun_cod);
		$update->bindParam(':fun_nome', $fun_nome);
		$update->bindParam(':fun_dataNas', $fun_dataNas);
		$update->bindParam(':fun_sexo', $fun_sexo);
		$update->bindParam(':fun_rg', $fun_rg);
		$update->bindParam(':fun_cpf', $fun_cpf);
		$update->bindParam(':fun_telefone', $fun_telefone);
		$update->bindParam(':fun_celular', $fun_celular);
		$update->bindParam(':fun_email', $fun_email);
		$update->bindParam(':fun_rua', $fun_rua);
		$update->bindParam(':fun_numero', $fun_numero);
		$update->bindParam(':fun_bairro', $fun_bairro);
		$update->bindParam(':fun_cep', $fun_cep);
		$update->bindParam(':fun_cidade', $fun_cidade);
		$update->bindParam(':fun_estado', $fun_estado);

		$resultado = $update->execute();
?>

<?php
	$sql = "SELECT * FROM funcionario";
	$consulta = $conn->prepare($sql);
	$consulta->execute();

	$registros = $consulta->fetchAll(PDO::FETCH_OBJ);
?>


	<!DOCTYPE html>
	<html>
	  <head>
	    <meta charset="UTF-8">
	    <title> Atualizar_Salvar - EisenFonseca </title>

			<link rel="shortcut icon" href="//virtual.ifro.edu.br/jiparana/pluginfile.php/1/theme_essential/favicon/1535988245/favicon.ico">

	    <link rel="stylesheet" type="text/css" href="css-tarefa.css">
	    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-all.min.css">
	    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-colors.min.css">
	    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-rtl.min.css">
	    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-icons.min.css">
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	  </head>

		<body class="eisen">
			<div id="container-menu">
				<nav class="navbar navbar-light bg-ligth">
					<a class="navbar-brand" href="#" title="Bonita logo, né? peguei da net">
						<img src="https://cdn-images-1.medium.com/max/2000/1*iIXOmGDzrtTJmdwbn7cGMw.png " height="30" class="d-inline-block align-top" alt="">
					</a>
					<ul class="h-menu">
						<li><a href="index.php" title="Clica, man, tu já esta na primeira página mesmo...">Home</a></li>
						<li><a href="cadastrar.php" title="Cadastre seus novos contatinhos aqui">Cadastrar</a></li>
						<li><a href="contatos.php" title="Vai lá ver os contatinhos, vai!">Contatos</a></li>
					</ul>
				</nav>
			</div>
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Atualizado com sucesso!</strong>
				<br />
				Novo contato atualizado com sucesso.
				<a class="alerta" href="contatos.php">
					<button type="button" class="close" aria-label="Close" >
						<span aria-hidden="true">&times;</span>
					</button></a>
				</div>
			</div>
			<div id="Conteiner-Principal">
				<div id="container-subtitulo">
					<h3 class=""><b>Contatos</b></h3>
				</div>
				<div id="container-contatos">
					<table class="table">
						<thead class="thead-dark">
							<tr>
								<th scope="col">#</th>
								<th scope="col">Nome</th>
								<th scope="col">Data de Nascimento</th>
								<th scope="col">Sexo</th>
								<th scope="col">Celular</th>
								<th scope="col">Estado</th>
								<th scope="col">Ação</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($registros as $registro) { ?>
								<tr>
									<th scope="row"><?php echo $registro->fun_cod; ?></th>
									<td><?php echo $registro->fun_nome; ?></td>
									<td><?php echo $registro->fun_dataNas; ?></td>
									<td><?php echo $registro->fun_sexo; ?></td>
									<td><?php echo $registro->fun_celular; ?></td>
									<td><?php echo $registro->fun_estado; ?></td>
									<td>
										<a class="none" href="atualizar.php?fun_cod=<?php echo $registro->fun_cod; ?>"><button type="button" class="btn btn-warning"> Alterar </button></a>
										<a class="none" href="deletar.php?fun_cod=<?php echo $registro->fun_cod; ?>"><button type="button" class="btn btn-danger"> Deletar </button></a>
									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
					<hr />
				</div>
			</div>

			<!-- Script -->
			<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
			<script src="https://cdn.metroui.org.ua/v4/js/metro.min.js"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
			<!-- . -->
		</body>
	</html>
