<div class="content-wrapper">

  <section class="content-header">

    <div class="container-fluid">

      <div class="row">

        <div class="col-sm-6">

          <h1>Administrar</h1>

          <span class="muted">Posiciones</span>

        </div>

        <div class="col-sm-6">

          <ol class="breadcrumb float-sm-right">

            <li class="breadcrumb-item"><a href="#">Inicio</a></li>

            <li class="breadcrumb-item active">Administrar Posiciones</li>

          </ol>

        </div>

      </div>

    </div>

  </section>


  <section class="content">


    <div class="card card-outline card-primary"> 

      <div class="card-header">
        
        <div class="card-title">

          <button class="btn btn-primary" data-toggle="modal" data-target="#modalCrearPosicion"> Crear Posición </button>

        </div>

      </div>

      <div class="card-body">

        <div class="container-fluid">

          <div class="row">

            <div class="col-md-12">
            
              <table class="table table-striped table-hover table-bordered table-sm tableDataSimple tablaPosicion">
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

                    $mostrarPosiciones=ctrPosicion::ctrMostrarPosicion($campo, $valor);

                    foreach ($mostrarPosiciones as $key => $value):

                      echo '
                      <tr>
                        <td>'.($key+1).'</td>
                        <td>'.$value["Nombre"].'</td>
                        <td>
                          <div class="btn-group">
                            <button class="btn btn-default btnEditarPosicion" idPosicion='.$value["Id"].' data-toggle="modal" data-target="#modalEditarPosicion"><i class="fas fa-edit"></i></button>
                            
                            <button class="btn btn-danger btnEliminarPosicion" idPosicion='.$value["Id"].'><i class="fas fa-trash-alt"></i></button>
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


<!-- MODAL CREAR POSICION -->

<div class="modal fade" id="modalCrearPosicion" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="crearPosicionLabel" aria-hidden="true">

  <div class="modal-dialog modal-dialog-scrollable modal-lg">

    <div class="modal-content">
    
      <div class="modal-header">
    
        <h5 class="modal-title" id="crearPosicionLabel">Crear posición</h5>
    
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

          $crearPosicion = new ctrPosicion();
          $crearPosicion -> ctrCrearPosicion();

        ?>

      </form>
    </div>
  </div>
</div>


<!-- MODAL EDITAR DEPARTAMENTO -->

<div class="modal fade" id="modalEditarPosicion" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="editarPosicionLabel" aria-hidden="true">

  <div class="modal-dialog modal-dialog-scrollable modal-lg">

    <div class="modal-content">
    
      <div class="modal-header">
    
        <h5 class="modal-title" id="editarPosicionLabel">Editar departamento</h5>
    
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
                  <input type="hidden" name="idPosicion" id="editarIdPosicion">
                  <input type="text" class="form-control" id="editarNombrePosicion" name="regNombre" required autocomplete="off">
                </div>
              </div>

            </div> 

          </div>

        <div class="modal-footer">
          <button type="reset" class="btn btn-secondary">Vaciar registro</button>
          <button type="submit" class="btn btn-primary" name="actualizar">Actualizar registro</button>
        </div>

        <?php

          $editarPosicion = new ctrPosicion();
          $editarPosicion -> ctrEditarPosicion();

        ?>

      </form>
    </div>
  </div>
</div>


<?php

  $eliminarPosicion = new ctrPosicion();
  $eliminarPosicion -> ctrEliminarPosicion();

?>