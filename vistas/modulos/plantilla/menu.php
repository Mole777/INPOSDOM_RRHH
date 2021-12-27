
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
  
        <i class="muted" style="color: white;"><?= $_SESSION["Tipo"]; ?></i>
  
      </div>
  
    </div>

    <nav class="mt-2">

      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">   

        <li class="nav-item active">

          <a href="bulto" class="nav-link" id="bulto_postal">

            <i class="nav-icon fas fa-luggage-cart"></i>

            <p>Bulto Postal</p>
          
          </a>

        </li>

        <li class="nav-item">


          <a href="certificado" class="nav-link" id="certificado">

            <i class="nav-icon fas fa-certificate"></i>

            <p>Certificado</p>
          
          </a>

        </li>

        <li class="nav-item">


          <a href="colis" class="nav-link" id="colis_postal">

            <i class="nav-icon fas fa-box"></i>

            <p>Colis Postal</p>
          
          </a>

        </li>

        <li class="nav-item">


          <a href="despacho" class="nav-link" id="ems">

            <i class="nav-icon fas fa-shipping-fast"></i>


            <p>Ems</p>
          
          </a>

        </li>

        <li class="nav-item">


          <a href="despacho" class="nav-link" id="despacho_general">

            <i class="nav-icon fas fa-truck"></i>

            <p>Despacho General</p>
          
          </a>

        </li>
        
          <li class="nav-item">

            <a href="#" class="nav-link">

              <i class="nav-icon fas fa-check"></i>

              <p> Asignaciones <i class="right fas fa-angle-left"></i> </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="nacional" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Devolución Nacional</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="internacional" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Devolución Internacional</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="numero-despacho" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Número Despacho</p>
                </a>
              </li>
            </ul>
          </li>   
        
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-print"></i>
            <p>
              Reportes
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="aviso" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Acuse de Aviso</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="paquetes" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Seguimiento de Paquetes</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="reporte-despachos" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Relación de Despacho</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="reporte-destino" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Reporte Destino</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="recibo" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Acuse de Recibo</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="tablilla" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Tablilla</p>
              </a>
            </li>
          </ul>
        </li>
 
        <li class="nav-item">

          <a href="#" class="nav-link">

            <i class="nav-icon fas fa-cubes"></i>

            <p> Administrar <i class="right fas fa-angle-left"></i> </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="administrar-servicios" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Servicios</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="administrar-usuarios" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Usuarios</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="administrar-departamentos" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Departamentos</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="administrar-plantilla" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Plantilla</p>
              </a>
            </li>
          </ul>
        </li>
    
      </ul>
    </nav>
    
  </div>
  
</aside>