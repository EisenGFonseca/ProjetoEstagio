<div id="container-contatos">
  <div class="table-responsive-xl">
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nome</th>
          <th scope="col">Cargo</th>
          <th scope="col">Celular</th>
          <th scope="col">Email</th>
          <th scope="col">Ação</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($registros as $registro) { ?>
          <tr>
            <th scope="row"><?php echo $registro->fun_cod; ?></th>
            <td><?php echo $registro->fun_nome; ?></td>
            <td><?php echo $registro->fun_funcao; ?></td>
            <td><?php echo $registro->fun_celular; ?></td>
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
