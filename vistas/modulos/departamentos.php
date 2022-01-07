<div class="content-wrapper">

  <section class="content-header">

    <div class="container-fluid">

      <div class="row">

        <div class="col-sm-6">

          <h1>Administrar</h1>

          <span class="muted">Departamentos</span>

        </div>

        <div class="col-sm-6">

          <ol class="breadcrumb float-sm-right">

            <li class="breadcrumb-item"><a href="#">Inicio</a></li>

            <li class="breadcrumb-item active">Administrar Departamentos</li>

          </ol>

        </div>

      </div>

    </div>

  </section>


  <section class="content">


    <div class="card card-outline card-primary"> 

      <div class="card-header">
        
        <div class="card-title">

          <button class="btn btn-primary" data-toggle="modal" data-target="#modalCrearDepartamento"> Crear Departamento </button>

        </div>

      </div>

      <div class="card-body">

        <div class="container-fluid">

          <div class="row">

            <div class="col-md-12">
            
              <table class="table table-striped table-hover table-bordered table-sm tableDataSimple tablaDepartamento">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>

                  <?php

                    $campo = null;
                    $valor = null;

                    $mostrarDepartamentos=ctrDepartamento::ctrMostrarDepartamento($campo, $valor);

                    foreach ($mostrarDepartamentos as $key => $value):

                      echo '
                      <tr>
                        <td>'.($key+1).'</td>
                        <td>'.$value["Nombre"].'</td>
                        <td>
                          <div class="btn-group">
                            <button class="btn btn-default btnEditarDepartamento" idDepartamento='.$value["Id"].' data-toggle="modal" data-target="#modalEditarDepartamento"><i class="fas fa-edit"></i></button>
                            
                            <button class="btn btn-danger btnEliminarDepartamento" idDepartamento='.$value["Id"].'><i class="fas fa-trash-alt"></i></button>
                          </div>
                        </td>
                      </tr>';

                    endforeach;
                  ?>
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

<div class="modal fade" id="modalCrearDepartamento" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="crearDepartamentoLabel" aria-hidden="true">

  <div class="modal-dialog modal-dialog-scrollable modal-lg">

    <div class="modal-content">
    
      <div class="modal-header">
    
        <h5 class="modal-title" id="crearDepartamentoLabel">Crear departamento</h5>
    
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    
          <span aria-hidden="true">&times;</span>
    
        </button>
    
      </div>
      
        <div class="modal-body">
         
          <form method="post">

            <div class="row">  

              <div class="col-12">
                <div class="form-group">
                  <label for="nombre"> Nombre: </label>
                  <input type="text" class="form-control" id="nombre" placeholder="Ingresar nombre" name="regNombre" required autocomplete="off">
                </div>
              </div>

            </div> 

          </div>

        <div class="modal-footer">
          <button type="reset" class="btn btn-secondary">Vaciar registro</button>
          <button type="submit" class="btn btn-primary" name="guardar">Guardar registro</button>
        </div>

        <?php

          $crearDepartamento = new ctrDepartamento();
          $crearDepartamento -> ctrCrearDepartamento();

        ?>

      </form>
    </div>
  </div>
</div>


<!-- MODAL EDITAR DEPARTAMENTO -->

<div class="modal fade" id="modalEditarDepartamento" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="editarDepartamentoLabel" aria-hidden="true">

  <div class="modal-dialog modal-dialog-scrollable modal-lg">

    <div class="modal-content">
    
      <div class="modal-header">
    
        <h5 class="modal-title" id="editarDepartamentoLabel">Editar departamento</h5>
    
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    
          <span aria-hidden="true">&times;</span>
    
        </button>
    
      </div>
      
        <div class="modal-body">
         
          <form method="post">

            <div class="row">  

              <div class="col-12">
                <div class="form-group">
                  <label for="nombre"> Nombre: </label>
                  <input type="hidden" name="idDepartamento" id="editarIdDepartamento">
                  <input type="text" class="form-control" id="editarNombreDepartamento" name="regNombre" required autocomplete="off">
                </div>
              </div>

            </div> 

          </div>

        <div class="modal-footer">
          <button type="reset" class="btn btn-secondary">Vaciar registro</button>
          <button type="submit" class="btn btn-primary" name="actualizar">Actualizar registro</button>
        </div>

        <?php

          $editarDepartamento = new ctrDepartamento();
          $editarDepartamento -> ctrEditarDepartamento();

        ?>

      </form>
    </div>
  </div>
</div>


<?php

  $eliminarDepartamento = new ctrDepartamento();
  $eliminarDepartamento -> ctrEliminarDepartamento();

?>