<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <h1>Reclutamiento y Selección de Personal</h1>
          <span class="muted">Acción de Personal</span>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Reclutamiento y Selección de Personal</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <section class="content">

    <div class="card card-outline card-primary">
      <div class="card-header">
        <h3 class="card-title"><button class="btn btn-primary" data-toggle="modal" data-target="#modalCrearDesignacion">Crear Perfil</button></h3>

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

              <table class="table table-hover table-striped tableData table-bordered table-sm table-condensed tablaDesignacion">

                <thead>
                  <tr>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Cédula</th>
                    <th>Teléfono</th>
                    <th>Posición</th>
                    <th>Departamento</th>
                    <th>Salario</th>
                    <th>Fecha de Ingreso</th>
                    <th>Acciones</th>
                  </tr>
                </thead>

                <tbody>

                  <?php

                    $campo = null;
                    $valor = null;

                    $mostrarPerfiles = ctrDesignacion::ctrMostrarDesignacion($campo, $valor);

                    foreach($mostrarPerfiles as $key => $value ):

                    ?>

                      <tr>
                        <td><?= $value["Id"]?></td>
                        <td><?= $value["Nombre"]?></td>
                        <td><?= $value["Apellido"]?></td>
                        <td><?= $value["Cedula"]?></td>
                        <td><?= $value["Telefono"]?></td>
                        <td><?= $value["Posicion"]?></td>
                        <td><?= $value["Departamento"]?></td>
                        <td><?= $value["Salario"]?></td>
                        <td><?= $value["Fecha_Ingreso"]?></td>
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

<!-- MODAL CREAR DESIGNACION -->

<div class="modal fade" id="modalCrearDesignacion" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="crearDesignacionLabel" aria-hidden="true">

  <div class="modal-dialog modal-dialog-scrollable modal-lg">

    <div class="modal-content">
    
      <div class="modal-header">
    
        <h5 class="modal-title" id="crearDesignacionLabel">Crear designación</h5>
    
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
                  <label for="cedula"> Cédula(Sin guiones): </label>
                  <input type="number" class="form-control" id="cedula" placeholder="Ingresar cédula" name="regCedula" required autocomplete="off" min="1" minlength="11" maxlength="11">
                </div>
              </div>

              <div class="col-6">
                <div class="form-group">
                  <label for="telefono"> Teléfono: </label>
                  <input type="number" class="form-control" id="telefono" placeholder="Ingresar teléfono" name="regTelefono" autocomplete="off" min="1">
                </div>
              </div>

              <div class="col-6">
                <div class="form-group">
                  <label for="correo"> Correo: </label>
                  <input type="email" class="form-control" id="correo" placeholder="Ingresar correo" name="regCorreo" autocomplete="off">
                </div>
              </div>

              <div class="col-6">
                <div class="form-group">
                  <label for="salario"> Salario: </label>
                  <input type="number" class="form-control" id="salario" placeholder="Ingresar salario" name="regSalario" required autocomplete="off">
                </div>
              </div>

              <div class="col-6">
                <div class="form-group">
                  <label for="posicion"> Posición: </label>
                  <select name="regPosicion" id="posicion" class="form-control" required autocomplete="off">
                    <option value="">Seleccionar Posición</option>
                    
                    <?php

                    $campo = null;
                    $valor = null;
                    $mostrarPosiciones = ctrPosicion::ctrMostrarPosicion($campo, $valor);

                    foreach ($mostrarPosiciones as $key => $value):

                    ?>

                    <option value="<?= $value["Id"] ?>"><?= $value["Nombre"] ?></option>
                    
                    <?php  
                      endforeach;
                    ?>
                                       
                  </select>
                </div>
              </div>
              
              <div class="col-6">
                <div class="form-group">
                  <label for="departamento"> Departamento: </label>
                  <select name="regDepartamento" id="departamento" class="form-control" required autocomplete="off">
                    <option value="">Seleccionar departamento</option>
                    
                    <?php

                    $campo = null;
                    $valor = null;
                    $mostrarDepartamentos =ctrDepartamento::ctrMostrarDepartamento($campo, $valor);

                    foreach ($mostrarDepartamentos as $key => $value):
                    ?>

                    <option value="<?= $value["Id"] ?>"><?= $value["Nombre"] ?></option>
                    
                    <?php  
                      endforeach;
                    ?>
                    
                                       
                  </select>
                </div>
              </div>

              <div class="col-6">
                <div class="form-group">
                  <label for="departamento"> Acción de Personal: </label>
                  <select id="departamento" class="form-control" autocomplete="off">
                    <option value="">Seleccionar departamento</option>
                    <option value="">Designación</option>
                    <option value="">Traslados</option>
                    <option value="">Reajustes Salarial</option>
                    <option value="">Ascensos</option>
                    
                                       
                  </select>
                </div>
              </div>

              <div class="col-6">
                <div class="form-group">
                  <label for="fechaIngreso"> Fecha de Ingreso: </label>
                  <input type="date" class="form-control" id="fechaIngreso" name="regFechaIngreso" required autocomplete="off">
                </div>
              </div>

              <div class="col-12">
                <div class="form-group">
                  <label for="direccion"> Dirección: </label>
                  <textarea id="direccion" cols="30" rows="2" class="form-control" placeholder="Ingresar dirección" name="regDireccion" autocomplete="off"></textarea> 
                </div>
              </div>

            </div> 

          </div>

        <div class="modal-footer">
          <button type="reset" class="btn btn-secondary">Limpiar registro</button>
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


<!-- MODAL EDITAR DESIGNACION -->

<div class="modal fade" id="modalEditarDesignacion" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="editarDesignacionLabel" aria-hidden="true">

  <div class="modal-dialog modal-dialog-scrollable modal-lg">

    <div class="modal-content">
    
      <div class="modal-header">
    
        <h5 class="modal-title" id="editarDesignacionLabel">Editar designación</h5>
    
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
                  <input type="hidden" id="editarIdDesignacion" name="idDesignacion">
                  <input type="text" class="form-control" id="editarNombreDesignacion" placeholder="Ingresar nombre" name="regNombre" required autocomplete="off">
                </div>
              </div>

              <div class="col-6">
                <div class="form-group">
                  <label for="editarApellidoDesignacion"> Apellido: </label>
                  <input type="text" class="form-control" id="editarApellidoDesignacion" placeholder="Ingresar apellido" name="regApellido" required autocomplete="off">
                </div>
              </div>

              <div class="col-6">
                <div class="form-group">
                  <label for="editarCedulaDesignacion"> Cédula(Sin guiones): </label>
                  <input type="number" class="form-control" id="editarCedulaDesignacion" placeholder="Ingresar cédula" name="regCedula" required autocomplete="off">
                </div>
              </div>

              <div class="col-6">
                <div class="form-group">
                  <label for="editarTelefonoDesignacion"> Teléfono: </label>
                  <input type="number" class="form-control" id="editarTelefonoDesignacion" placeholder="Ingresar teléfono" name="regTelefono" autocomplete="off">
                </div>
              </div>

              <div class="col-6">
                <div class="form-group">
                  <label for="editarCorreoDesignacion"> Correo: </label>
                  <input type="email" class="form-control" id="editarCorreoDesignacion" placeholder="Ingresar correo" name="regCorreo" autocomplete="off">
                </div>
              </div>

              <div class="col-6">
                <div class="form-group">
                  <label for="editarSalarioDesignacion"> Salario: </label>
                  <input type="text" class="form-control" id="editarSalarioDesignacion" placeholder="Ingresar salario" name="regSalario" required autocomplete="off">
                </div>
              </div>

              <div class="col-6">
                <div class="form-group">
                  <label for="posicion"> Posición: </label>
                  <select name="regPosicion" class="form-control" required autocomplete="off">
                    <option value="" id="selectPosicionDesignacion"></option>
                    
                    <?php

                    $campo = null;
                    $valor = null;
                    $mostrarPosiciones = ctrPosicion::ctrMostrarPosicion($campo, $valor);

                    foreach ($mostrarPosiciones as $key => $value):
                    ?>
                      
                    <option value="<?= $value["Id"] ?>"><?= $value["Nombre"] ?></option>

                    <?php  
                      endforeach;
                    ?>
                   
                                       
                  </select>
                </div>
              </div>
              
              <div class="col-6">
                
                <div class="form-group">
                
                  <label for="departamento"> Departamento: </label>             
                  <select name="regDepartamento" class="form-control" required autocomplete="off">
                      <option value="" id="selectDepartamentoDesignacion"></option>
                    <?php

                      $campo = null;
                      $valor = null;
                    
                      $mostrarDepartamentos = ctrDepartamento::ctrMostrarDepartamento($campo, $valor);

                      foreach ($mostrarDepartamentos as $key => $value):
                    ?>  
                        
                      <option value="<?= $value["Id"] ?>"><?= $value["Nombre"] ?></option>

                    <?php  
                      endforeach;
                    ?>     
                  </select>

                </div>

              </div>

              <div class="col-12">
                <div class="form-group">
                  <label for="editarFechaIngresoDesignacion"> Fecha de Ingreso: </label>
                  <input type="date" class="form-control" id="editarFechaIngresoDesignacion" name="regFechaIngreso" required autocomplete="off">
                </div>
              </div>

              <div class="col-12">
                <div class="form-group">
                  <label for="editarDireccionDesignacion"> Dirección: </label>
                  <textarea id="editarDireccionDesignacion" cols="30" rows="2" class="form-control" placeholder="Ingresar dirección" name="regDireccion" autocomplete="off"></textarea> 
                </div>
              </div>

            </div> 

          </div>

        <div class="modal-footer">
          <button type="reset" class="btn btn-secondary">Limpiar registro</button>
          <button type="submit" class="btn btn-primary" name="actualizarDesignacion">Actualizar registro</button>
        </div>

         <?php

          $editarDesignacion = new ctrDesignacion();
          $editarDesignacion -> ctrEditarDesignacion();

        ?>

      </form>

    </div>

  </div>

</div>

<?php
  
  $eliminarDesignacion = new ctrDesignacion();
  $eliminarDesignacion->ctrEliminarDesignacion();

?>