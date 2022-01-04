<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <h1>Reclutamiento y Selección de Personal</h1>
          <span class="muted">Designaciones</span>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Designación</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <section class="content">

    <div class="card card-outline card-primary">
      <div class="card-header">
        <h3 class="card-title"><button class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">Crear Designación</button></h3>

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

              <table class="table table-hover table-striped tableData table-bordered table-sm">

                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Cédula</th>
                    <th>Teléfono</th>
                    <th>Posición</th>
                    <th>Departamento</th>
                    <th>Salario</th>
                    <th>Correo</th>
                    <th>Fecha de Ingreso</th>
                    <th>Acciones</th>
                  </tr>
                </thead>

                <tbody>
                
                  <tr>
                    <td>1</td>
                    <td>Génesis Melquisedec</td>
                    <td>Sarante Feliz</td>
                    <td>40225273560</td>
                    <td>8296495805</td>
                    <td>Programador</td>
                    <td>Tecnología de la Información</td>
                    <td>$100,000.00</td>
                    <td>genesis.sarante@inposdom.gob.do</td>
                    <td>09/12/2021</td>
                    <td>
                      <div class="btn-group">
                        <button class="btn btn-default">Editar</button>
                        <button class="btn btn-danger">Ver</button>
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

<!-- MODAL CREAR DESIGNACION -->

<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

  <div class="modal-dialog modal-dialog-scrollable modal-lg">

    <div class="modal-content">
    
      <div class="modal-header">
    
        <h5 class="modal-title" id="staticBackdropLabel">Crear designación</h5>
    
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    
          <span aria-hidden="true">&times;</span>
    
        </button>
    
      </div>
      
        <div class="modal-body">
         
          <form method="post">

            <div class="row">  

              <div class="col-6">
                <div class="form-group">
                  <label for="nombre"> Nombre: </label>
                  <input type="text" class="form-control" id="nombre" placeholder="Ingresar nombre" name="regNombre" required>
                </div>
              </div>

              <div class="col-6">
                <div class="form-group">
                  <label for="apellido"> Apellido: </label>
                  <input type="text" class="form-control" id="apellido" placeholder="Ingresar apellido" name="regApellido" required>
                </div>
              </div>

              <div class="col-6">
                <div class="form-group">
                  <label for="cedula"> Cédula(Sin guiones): </label>
                  <input type="text" class="form-control" id="cedula" mask="000-000000-0" placeholder="Ingresar cédula: 000-00000-000" name="regCedula" required>
                </div>
              </div>

              <div class="col-6">
                <div class="form-group">
                  <label for="telefono"> Teléfono: </label>
                  <input type="text" class="form-control" id="telefono" placeholder="Ingresar teléfono: 000-000-0000" name="regTelefono">
                </div>
              </div>

              <div class="col-6">
                <div class="form-group">
                  <label for="correo"> Correo: </label>
                  <input type="email" class="form-control" id="correo" placeholder="Ingresar correo" name="regCorreo">
                </div>
              </div>

              <div class="col-6">
                <div class="form-group">
                  <label for="salario"> Salario: </label>
                  <input type="number" class="form-control" id="salario" placeholder="Ingresar salario" name="regSalario" required>
                </div>
              </div>

              <div class="col-6">
                <div class="form-group">
                  <label for="posicion"> Posición: </label>
                  <input type="text" class="form-control" id="posicion" placeholder="Ingresar posición" name="regPosicion" required>
                </div>
              </div>
              
              <div class="col-6">
                <div class="form-group">
                  <label for="departamento"> Departamento: </label>
                  <select name="regDepartamento" id="departamento" class="form-control" required>
                    <option value="">Seleccionar departamento</option>
                    <option value="1">Tecnología de la Información</option>
                  </select>
                </div>
              </div>

              <div class="col-12">
                <div class="form-group">
                  <label for="fechaIngreso"> Fecha de Ingreso: </label>
                  <input type="date" class="form-control" id="fechaIngreso" name="regFechaIngreso" required>
                </div>
              </div>

              <div class="col-12">
                <div class="form-group">
                  <label for="direccion"> Dirección: </label>
                  <textarea id="direccion" cols="30" rows="2" class="form-control" placeholder="Ingresar dirección" name="regDireccion"></textarea> 
                </div>
              </div>

            </div> 

          </div>

        <div class="modal-footer">
          <button type="reset" class="btn btn-secondary">Vaciar registro</button>
          <button type="submit" class="btn btn-primary" name="guardar">Guardar registro</button>
        </div>

         <?php

          $crearDesignacion = new ctrDesignacion();
          $crearDesignacion -> ctrCrearDesignacion();

        ?>
      </form>
    </div>
  </div>
</div>