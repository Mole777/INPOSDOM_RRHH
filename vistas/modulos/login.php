<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>INPOSDOM</b></a>
  </div>

  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <h2><b>SGRRHH</b></h2>
      <p>Sistema de Gestión de Recursos Humanos</p>
    </div>
    <div class="card-body login-card-body">

      <form method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Usuario" name="ingUsuario" autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Contraseña" name="ingClave" autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-key"></span>
            </div>
          </div>
        </div>
        <div class="row">
          
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block" name="btnIngresar">Iniciar Sesión</button>
          </div>
          <?php

            $login = new ctrUsuario();
            $login -> ctrIngresoUsuario();

          ?>
        
        </div>
      </form>

    </div>
    
  </div>
</div>