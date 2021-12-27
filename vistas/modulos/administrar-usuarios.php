<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <h1>Administrar</h1>
          <span class="muted"> Administrar Usuarios </span>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Administrar Usuarios</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <section class="content">

    <div class="card card-outline card-primary">
      <div class="card-header">
        <h3 class="card-title"><button class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">Crear usuario</button></h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
        </div>

      </div>

      <div class="card-body">

        <div class="container-fluid">

          <div class="row">

            <div class="col-12" id="example1_wrapper">

              <table class="table table-hover table-striped tableDataSimple table-bordered table-sm">

                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Cédula</th>
                    <th>Departamento</th>
                    <th>Rol</th>
                    <th>Estado</th>
                    <th>Acción</th>
                  </tr>
                </thead>

                <tbody>

                  <tr>
                   <td>1</td>
                   <td>Génesis Melquisedec</td>
                   <td>Sarante Feliz</td>
                   <td>123-456789-00</td>
                   <td>Tecnología de la Información</td>
                   <td> Programador </td>
                   <td> Activo </td>
                   <td><div class="btn-group">
                     <button class="btn btn-primary btn-sm">Ver Perfil</button>
                     <button class="btn btn-secondary btn-sm">Editar</button> 
                   </div></td>
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


<!-- MODAL CREAR USUARIO -->

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Crear usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
        <div class="modal-body">
          <form method="post">

            <div class="row">            
              <div class="col-6">
                <div class="form-group">
                  <label for="servicio">Nombre:</label>
                  <input type="text" class="form-control" id="servicio" placeholder="Ingresar nombre">
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <label for="servicio">Apellido:</label>
                  <input type="text" class="form-control" id="servicio" placeholder="Ingresar apellido">
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <label for="servicio">Cédula:</label>
                  <input type="text" class="form-control" id="servicio" placeholder="xxx-xxxxxx-x">
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <label for="servicio">Usuario:</label>
                  <input type="text" class="form-control" id="servicio" placeholder="Ingresar usuario">
                </div>
              </div>
              
              <div class="col-6">
                <div class="form-group">
                  <label for="servicio">Clave:</label>
                  <input type="text" class="form-control" id="servicio" placeholder="Ingresar clave">
                </div>
              </div>
              <div class="col-6">
                 <div class="form-group">
                  <label for="">Departamento:</label>
                  <select name="" id="" class="form-control">
                    <option value="">Seleccionar</option>
                    <option value="">Tecnología de la Información</option>
                    <option value="">Comunicación</option>
                  </select>
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <label for="">Rol:</label>
                  <select name="" id="" class="form-control">
                    <option value="">Seleccionar</option>
                    <option value="">Operador</option>
                    <option value="">Supervisor</option>
                    <option value="">Programador</option>
                    <option value="">Director</option>
                  </select>
                </div>
              </div>

              <div class="col-6">
                <div class="form-group">
                  <label for="">Estado:</label>
                  <select name="" id="" class="form-control">
                    <option value="">Seleccionar</option>
                    <option value="">Activo</option>
                    <option value="">Inactivo</option>
                  </select>
                </div>
              </div>
              

            </div> 
          </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar cambios</button>
        </div>
      </form>
    </div>
  </div>
</div>