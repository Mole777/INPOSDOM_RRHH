<div class="content-wrapper">

  <section class="content-header">

    <div class="container-fluid">

      <div class="row">

        <div class="col-sm-6">

          <h1>Administrador</h1>
          <span class="muted">Usuarios</span>

        </div>

        <div class="col-sm-6">

          <ol class="breadcrumb float-sm-right">

            <li class="breadcrumb-item"><a href="#">Administrador-Usuarios</a></li>

            <li class="breadcrumb-item active">Inicio</li>

          </ol>

        </div>

      </div>

    </div>

  </section>

  <section class="content">

    <div class="card card-outline card-primary"> 

      <div class="card-header">
        
        <div class="card-title">

          <button class="btn btn-primary" data-toggle="modal" data-target="#modalCrearUsuario"> Crear Usuario </button>

        </div>

      </div>

      <div class="card-body">

        <div class="container-fluid">

          <div class="row">

            <div class="col-md-12">
              
              <table class="table table-hover table-striped table-bordered tablaUsuarios tableDataSimple table-sm">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Usuario</th>
                  <th>Estado</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Melquisedec</td>
                  <td>Sarante</td>
                  <td>melquisedec</td>
                  <td>
                    <div class="form-group">
                    <div class="custom-control custom-switch custom-switch-off-default custom-switch-on-success">
                      <input type="checkbox" class="custom-control-input" id="customSwitch3">
                      <label class="custom-control-label" for="customSwitch3"></label>
                    </div>
                  </div>
                  </td>
                  <td>
                    <div class="btn-group">
                      <button class="btn btn-info btnEditarDesignacion" idDesignacion='.$value["Id"].' data-toggle="modal" data-target="#modalEditarDesignacion"><i class="fas fa-edit"></i></button>
                      <button class="btn btn-danger btnEliminarDesignacion" idDesignacion='.$value["Id"].' ><i class="fas fa-trash-alt"></i></button>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>

            </div>
            
          </div>
      
        </div>

      </div>

    </div>         

  </section>

</div>