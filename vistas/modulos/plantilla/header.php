<nav class="main-header navbar navbar-expand navbar-white navbar-light">

  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li> 
  </ul>

  <ul class="navbar-nav ml-auto">

    <li class="nav-item dropdown">

      <a class="nav-link" data-toggle="dropdown" href="#">
        <span class="mr-2"><?= $_SESSION["Nombre"]; ?></span>
        <i class="fas fa-angle-down"></i>
      </a>
      
      <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
        <?php if (isset($_SESSION["AccionAdministrativa"])): ?>
          <a href="perfil" class="dropdown-item">          
            <i class="fas fa-user float-left mt-1"></i> 
            <span class="ml-2">Perfil</span>
          </a>
        <?php endif; ?>
          <div class="dropdown-divider"></div> 
          <a href="salir" class="dropdown-item">          
            <i class="fas fa-sign-out-alt float-left mt-1"></i> 
            <span class="ml-2">Salir</span>
          </a> 

      </div>

    </li>
  </ul>
</nav>