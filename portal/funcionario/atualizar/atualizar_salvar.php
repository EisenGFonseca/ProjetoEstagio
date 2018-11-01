<?php

	include('conexao.php');

	if(empty($_POST['pes_id']) || empty($_POST['pes_nome']) || empty($_POST['pes_dataNas']) || empty($_POST['pes_sexo']) || empty($_POST['pes_celular']) || empty($_POST['pes_estado'])){
		header('location:contatos.php');
	} else {

		$pes_id = filter_var($_POST['pes_id']);
		$pes_nome = filter_var($_POST['pes_nome']);
		$pes_dataNas = filter_var($_POST['pes_dataNas']);
		$pes_sexo = filter_var($_POST['pes_sexo']);
		$pes_celular = filter_var($_POST['pes_celular']);
		$pes_estado = filter_var($_POST['pes_estado']);

		$sql = "UPDATE pessoa SET pes_nome = :pes_nome, pes_dataNas = :pes_dataNas, pes_sexo = :pes_sexo, pes_celular = :pes_celular, pes_estado = :pes_estado WHERE pes_id = :pes_id";

		$update = $conn->prepare($sql);
		$update->bindParam(':pes_id', $pes_id);
		$update->bindParam(':pes_nome', $pes_nome);
		$update->bindParam(':pes_dataNas', $pes_dataNas);
		$update->bindParam(':pes_sexo', $pes_sexo);
		$update->bindParam(':pes_celular', $pes_celular);
		$update->bindParam(':pes_estado', $pes_estado);

		$resultado = 	$update->execute();
	}

?>

<?php

	$sql = "SELECT * FROM pessoa";
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
									<th scope="row"><?php echo $registro->pes_id; ?></th>
									<td><?php echo $registro->pes_nome; ?></td>
									<td><?php echo $registro->pes_dataNas; ?></td>
									<td><?php echo $registro->pes_sexo; ?></td>
									<td><?php echo $registro->pes_celular; ?></td>
									<td><?php echo $registro->pes_estado; ?></td>
									<td>
										<a class="none" href="atualizar.php?pes_id=<?php echo $registro->pes_id; ?>"><button type="button" class="btn btn-warning"> Alterar </button></a>
										<a class="none" href="deletar.php?pes_id=<?php echo $registro->pes_id; ?>"><button type="button" class="btn btn-danger"> Deletar </button></a>
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
