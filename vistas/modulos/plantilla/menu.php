
<aside class="main-sidebar sidebar-dark-primary elevation-4">

  <a href="index3.html" class="brand-link">

    <img src="vistas/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">

    <span class="brand-text font-weight-light">INPOSDOM</span>
  
  </a>

  
  <div class="sidebar">
  
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
  
      <div class="image">
  
        <img src="vistas/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
  
      </div>
  
      <div class="info">
  
        <a href="#" class="d-block"><?= $_SESSION["Nombre"]; ?></a>
  
        <i class="muted" style="color: white;"><?= $_SESSION["Rol"]; ?></i>
  
      </div>
  
    </div>

    <nav class="mt-2">

      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">   

        <li class="nav-item active">

          <a href="bulto" class="nav-link" id="bulto_postal">

            <i class="nav-icon fas fa-user-plus"></i>

            <p>Reclutamiento y Selección de Personal</p>
          
          </a>

        </li>
    
      </ul>
      
    </nav>
    
  </div>
  
</aside>