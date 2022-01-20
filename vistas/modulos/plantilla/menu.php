
<aside class="main-sidebar sidebar-dark-primary elevation-4">

  <a href="index3.html" class="brand-link">

    <img src="vistas/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">

    <span class="brand-text font-weight-light"><b>RRHH</b></span>
  
  </a>

  
  <div class="sidebar">
  
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
  
      <div class="image">
  
        <img src="vistas/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
  
      </div>
  
      <div class="info">
  
        <a href="#" class="d-block"> <?= $_SESSION["Nombre"]; ?></a>
  
        <i class="muted" style="color: white;"> <?= $_SESSION["Rol"]; ?></i>
  
      </div>
  
    </div>

    <nav class="mt-2">

      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">   
        
        <li class="nav-item">

          <a href="inicio" class="nav-link">

            <i class="nav-icon fas fa-sitemap"></i>

            <p>Inicio</p>
          
          </a>

        </li>

        <li class="nav-item has-treeview menu-close">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Reclutamiendo y Seleción de Personal
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="departamentos" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Departamentos</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="posiciones" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Posiciones</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="designaciones" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Designaciones</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">

          <a href="administrador-usuarios" class="nav-link">

            <i class="nav-icon fas fa-sitemap"></i>

            <p>Administrar Usuarios</p>
          
          </a>

        </li>
    
      </ul>
      
    </nav>
    
  </div>
  
</aside>