  <!-- MENU -->
  <div data-role="appbar" data-expand-point="md">
    <div data-role="appbar" data-expand-point="md">
      <button type="button" class="hamburger menu-down hidden">
        <span class="line"></span>
        <span class="line"></span>
        <span class="line"></span>
      </button>
      <a href="/index.php" class="brand no-hover">
        <img src="https://www.planet-source-code.com/vb/2010Redesign/images/LangugeHomePages/HTML5_CSS_JavaScript.png" height="40" class="d-inline-block align-top" alt="">
      </a>
      <ul class="app-bar-menu">
        <a class="btn btn-light" href="/index.php">Início</a>
        <a class="btn btn-light" href="#">Contato</a>
        <a class="btn btn-light" href="/sobre/sobre.php">Sobre</a>
        <a class="btn btn-light" href="/portal/index_portal.php">Sistema</a>
      </ul>

      <?php if(isset($_SESSION['user_nome'])) : ?>
        <ul class="app-bar-menu ml-auto collapsed" style="">
          <a class="btn btn-light" href="acesso_portal/logout.php"><b><?php echo $_SESSION['user_nome'] ?></b></a>
          <a class="btn btn-danger" href="/portal/acesso_portal/logout.php">Sair</a>
        </ul>
      <?php endif ?>
    </div>
  </ul>
</div>
