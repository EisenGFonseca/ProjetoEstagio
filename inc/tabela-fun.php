<div id="container-contatos">
  <div class="table-responsive-xl">
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
              <a class="none" href="../atualizar/atualizar.php?fun_cod=<?php echo $registro->fun_cod; ?>"><button type="button" class="btn btn-warning"> Alterar </button></a>
              <a class="none" href="deletar.php?fun_id=<?php echo $registro->fun_cod; ?>"><button type="button" class="btn btn-danger"> Deletar </button></a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>
