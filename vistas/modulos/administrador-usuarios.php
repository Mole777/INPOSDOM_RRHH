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

                <?php

                  $campo = null;
                  $valor = null;

                  $mostrarUsuarios = ctrUsuario::ctrMostrarUsuarios($campo, $valor);

                  foreach ($mostrarUsuarios as $key => $value):

                ?>

                <tr>
                  <td><?= ($key+1)?></td>
                  <td><?= $value["Nombre"]?></td>
                  <td><?= $value["Apellido"]?></td>
                  <td><?= $value["Usuario"]?></td>
                  <td>
                    <div class="form-group">
                      <div class="custom-control custom-switch custom-switch-off-default custom-switch-on-success">   
                      
                        <?php if ($value["EstadoID"] == "1"): ?>
                            <input type="checkbox" class="custom-control-input btnEstadoUsuario" idEstado="<?= $value["EstadoID"]?>" id="customSwitch<?= $value["Id"]?>" checked="true" disabled>
                        <?php else: ?>
                            <input type="checkbox" class="custom-control-input btnEstadoUsuario" idEstado="<?= $value["EstadoID"]?>" id="customSwitch<?= $value["Id"]?>" disabled>
                        <?php endif ?>
                        <label class="custom-control-label" for="customSwitch<?= $value["Id"]?>"></label>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="btn-group">
                      <button class="btn btn-info btnEditarDesignacion" idDesignacion="<?= $value["Id"]?>" data-toggle="modal" data-target="#modalEditarDesignacion"><i class="fas fa-edit"></i></button>
                      <button class="btn btn-danger btnEliminarDesignacion" idDesignacion="<?= $value["Id"]?>" ><i class="fas fa-trash-alt"></i></button>
                    </div>
                  </td>
                </tr>

                <?php
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


<!-- MODAL CREAR USUARIOS -->

<div class="modal fade" id="modalCrearUsuario" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="crearUsuarioLabel" aria-hidden="true">

  <div class="modal-dialog modal-dialog-scrollable modal-lg">

    <div class="modal-content">
    
      <div class="modal-header">
    
        <h5 class="modal-title" id="crearUsuarioLabel">Crear usuario</h5>
    
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
                  <input type="text" class="form-control" id="nombre" placeholder="Ingresar nombre" name="regNombre" required autocomplete="off">
                </div>
              </div>

              <div class="col-6">
                <div class="form-group">
                  <label for="apellido"> Apellido: </label>
                  <input type="text" class="form-control" id="apellido" placeholder="Ingresar apellido" name="regApellido" required autocomplete="off">
                </div>
              </div>

              <div class="col-6">
                <div class="form-group">
                  <label for="usuario"> Usuario: </label>
                  <input type="text" class="form-control" id="usuario" placeholder="Ingresar usuario" name="regUsuario" required autocomplete="off">
                </div>
              </div>


              <div class="col-6">
                <div class="form-group">
                  <label for="clave"> Clave: </label>
                  <input type="text" class="form-control" id="clave" placeholder="Ingresar clave" name="regClave" required autocomplete="off">
                </div>
              </div>

              <div class="col-6">
                <div class="form-group">
                  <label for="regRol">Rol:</label>
                  <select name="regRol" id="regRol" class="form-control" placeholder="Seleccione el rol">
                    <option>Seleccionar rol</option>
                  </select>
                </div>
              </div>

              <div class="col-6">
                <div class="form-group">
                  <label for="regEstado">Estado:</label>
                  <select name="regEstado" id="regEstado" class="form-control">
                    <option>Seleccionar estado</option>
                  </select>
                </div>
              </div>

            </div> 

          </div>

        <div class="modal-footer">
          <button type="reset" class="btn btn-secondary">Vaciar registro</button>
          <button type="submit" class="btn btn-primary" name="guardar">Guardar registro</button>
        </div>

        <?php

          $crearUsuario = new ctrUsuario();
          $crearUsuario -> ctrCrearUsuario();

        ?>

      </form>
    </div>
  </div>
</div>