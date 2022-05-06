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
        <h3 class="card-title"><button class="btn btn-primary" data-toggle="modal" data-target="#modalCrearPersonal">Crear Perfil</button></h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
        </div>

      </div>

      <div class="card-body">

        <div class="container-fluid">

          <div class="row">

            <div class="col-md-12" id="example1_wrapper">

              <table class="table table-hover table-striped tableData table-bordered table-sm table-condensed tablaPersonal">

                <thead>
                  <tr>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Documento</th>
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

                    $mostrarPerfiles = ctrPersonal::ctrMostrarPersonal($campo, $valor);

                    foreach($mostrarPerfiles as $key => $value ):

                    ?>

                      <tr>
                        <td><?= $value["Id"]?></td>
                        <td><?= $value["Nombre"]?></td>
                        <td><?= $value["Apellido"]?></td>
                        <td><?= $value["Documento"]?></td>
                        <td><?= $value["Telefono"]?></td>
                        <td><?= $value["Posicion"]?></td>
                        <td><?= $value["Departamento"]?></td>
                        <td><?= $value["Salario"]?></td>
                        <td><?= $value["Fecha_Ingreso"]?></td>
                        <td>
                          <div class="btn-group">
                            <button class="btn btn-default btnMostrarPersonal" idPersonal="<?= $value["Id"]?>" ><i class="fas fa-search"></i></button>
                            <button class="btn btn-info btnEditarPersonal" idPersonal="<?= $value["Id"]?>" data-toggle="modal" data-target="#modalEditarPersonal"><i class="fas fa-edit"></i></button>
                            <button class="btn btn-danger btnEliminarPersonal" idPersonal="<?= $value["Id"]?>" ><i class="fas fa-trash-alt"></i></button>
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

<!-- MODAL CREAR PERSONAL -->

<div class="modal fade" id="modalCrearPersonal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="crearPersonalLabel" aria-hidden="true">

  <div class="modal-dialog modal-dialog-scrollable modal-lg">

    <div class="modal-content">
    
      <div class="modal-header">
    
        <h5 class="modal-title" id="crearPersonalLabel">Crear perfil</h5>
    
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    
          <span aria-hidden="true">&times;</span>
    
        </button>
    
      </div>
      
        <div class="modal-body">
         
          <form method="post" id="formValidarPersonal">

            <div class="row">  

              <div class="col-6">
                <div class="form-group">
                  <label for="nombre"> Nombre: </label>
                  <input type="text" minlength="3" class="form-control" id="nombre" placeholder="Ingresar nombre" name="regNombre" required autocomplete="off">
                </div>
              </div>

              <div class="col-6">
                <div class="form-group">
                  <label for="apellido"> Apellido: </label>
                  <input type="text" class="form-control" id="apellido" placeholder="Ingresar apellido" name="regApellido" minlength="3" required autocomplete="off">
                </div>
              </div>

              <div class="col-6">
                <label for="TipoDocumento">Tipo Documento:</label>
                <select name="regTipoDocumento" id="TipoDocumento" onchange="habilitarDocumento()" class="form-control selectDocumento" required>
                  <option value="">Seleccionar Documento</option>
                 
                  <?php
                    
                    $campo = null;
                    $valor = null;
                    $mostrarTiposDocumentos = ctrDocumento::ctrMostrarDocumentos($campo, $valor);

                    foreach ($mostrarTiposDocumentos as $key => $value): 

                  ?>
                    <option value="<?= $value["Id"] ?>"><?= $value["Tipo"]?></option>
                    
                  <?php endforeach ?>
                
                </select>
              </div>


              <div class="col-6">
                <div class="form-group">
                  <label for="documento"> Documento(Sin guiones): </label>
                  <input type="number" class="form-control" id="documento" placeholder="Ingresar documento" name="regDocumento" required autocomplete="off" min="1" minlength="11" maxlength="11" disabled>
                </div>
              </div>

              <div class="col-6">
                <div class="form-group">
                  <label for="correo"> Correo: </label>
                  <input type="email" class="form-control" id="correo" placeholder="Ingresar correo" name="regCorreo" autocomplete="off">
                </div>
              </div>

              <div class="col-3">
                <label for="sexo">Sexo:</label>
                <select name="regSexo" id="sexo" class="form-control" required>
                  <option value="">Seleccionar Sexo</option>
                  <option value="M">Masculino</option>
                  <option value="F">Femenino</option>
                </select>
              </div>

              <div class="col-3">
                <div class="form-group">
                  <label for="sexo"> Teléfono: </label>
                  <input type="number" class="form-control" id="telefono" placeholder="Ingresar teléfono" name="regTelefono" autocomplete="off" min="1">
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

              <div class="col-3">
                <div class="form-group">
                  <label for="accion_personal"> Acción de Personal: </label>
                  <select id="accion_personal" class="form-control" autocomplete="off" disabled>
                    <option value="">Designación</option>
                  </select>
                </div>
              </div>

              <div class="col-3">
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

          $crearPersonal = new ctrPersonal();
          $crearPersonal -> ctrCrearPersonal();

        ?>
      </form>
    </div>
  </div>
</div>


<!-- MODAL EDITAR PERSONAL -->

<div class="modal fade" id="modalEditarPersonal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="editarPersonalLabel" aria-hidden="true">

  <div class="modal-dialog modal-dialog-scrollable modal-lg">

    <div class="modal-content">
    
      <div class="modal-header">
    
        <h5 class="modal-title" id="editarPersonalLabel">Editar perfil</h5>
    
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
                  <input type="hidden" id="editarIdPersonal" name="idPersonal">
                  <input type="text" class="form-control" id="editarNombrePersonal" placeholder="Ingresar nombre" name="regNombre" required autocomplete="off">
                </div>
              </div>

              <div class="col-6">
                <div class="form-group">
                  <label for="editarApellidoPersonal"> Apellido: </label>
                  <input type="text" class="form-control" id="editarApellidoPersonal" placeholder="Ingresar apellido" name="regApellido" required autocomplete="off">
                </div>
              </div>

              <div class="col-6">
                <label for="TipoDocumento">Tipo Documento:</label>
                <select name="regTipoDocumento" id="editarTipoDocumento" onchange="habilitarDocumento()" class="form-control" required>
                 
                  <?php
                    
                    $campo = null;
                    $valor = null;
                    $mostrarTiposDocumentos = ctrDocumento::ctrMostrarDocumentos($campo, $valor);

                    foreach ($mostrarTiposDocumentos as $key => $value): 

                  ?>
                    <option id="tipoDocumento<?= $value['Id'] ?>" value="<?= $value["Id"] ?>"><?= $value["Tipo"]?></option>
                    
                  <?php endforeach ?>
                
                </select>
              </div>

              <div class="col-6">
                <div class="form-group">
                  <label for="editarDocumentoPersonal"> Documento(Sin guiones): </label>
                  <input type="number" class="form-control" id="editarDocumentoPersonal" placeholder="Ingresar documento" name="regDocumento" required autocomplete="off">
                </div>
              </div>

              <div class="col-6">
                <div class="form-group">
                  <label for="editarCorreoPersonal"> Correo: </label>
                  <input type="email" class="form-control" id="editarCorreoPersonal" placeholder="Ingresar correo" name="regCorreo" autocomplete="off">
                </div>
              </div>

              <div class="col-3">
                <label for="editarSexoPersonal">Sexo:</label>
                <select name="regSexo" class="form-control selectSexo" required>
                  <option value="M" id="selectSexoPersonalM">Masculino</option>
                  <option value="F" id="selectSexoPersonalF">Femenino</option>
                </select>
              </div>

              <div class="col-3">
                <div class="form-group">
                  <label for="editarTelefonoPersonal"> Teléfono: </label>
                  <input type="number" class="form-control" id="editarTelefonoPersonal" placeholder="Ingresar teléfono" name="regTelefono" autocomplete="off">
                </div>
              </div>              

              <div class="col-6">
                <div class="form-group">
                  <label for="editarSalarioPersonal"> Salario: </label>
                  <input type="text" class="form-control" id="editarSalarioPersonal" placeholder="Ingresar salario" name="regSalario" required autocomplete="off">
                </div>
              </div>

              <div class="col-6">
                <div class="form-group">
                  <label for="posicion"> Posición: </label>
                  <select name="regPosicion" class="form-control" required autocomplete="off">
                    
                    <?php

                    $campo = null;
                    $valor = null;
                    $mostrarPosiciones = ctrPosicion::ctrMostrarPosicion($campo, $valor);

                    foreach ($mostrarPosiciones as $key => $value):
                    ?>
                      
                    <option id="selectPosicionPersonal<?= $value['Id'] ?>" value="<?= $value["Id"] ?>" ><?= $value["Nombre"] ?></option>

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

                    <?php

                      $campo = null;
                      $valor = null;
                    
                      $mostrarDepartamentos = ctrDepartamento::ctrMostrarDepartamento($campo, $valor);

                      foreach ($mostrarDepartamentos as $key => $value):
                    ?>  
                        
                      <option id="selectDepartamentoPersonal<?= $value['Id'] ?>" value="<?= $value["Id"] ?>"><?= $value["Nombre"] ?></option>

                    <?php  
                      endforeach;
                    ?>     
                  </select>

                </div>

              </div>

              <div class="col-6">
                <div class="form-group">
                  <label for="editarFechaIngresoPersonal"> Fecha de Ingreso: </label>
                  <input type="date" class="form-control" id="editarFechaIngresoPersonal" name="regFechaIngreso" required autocomplete="off">
                </div>
              </div>

              <div class="col-12">
                <div class="form-group">
                  <label for="editarDireccionPersonal"> Dirección: </label>
                  <textarea id="editarDireccionPersonal" cols="30" rows="2" class="form-control" placeholder="Ingresar dirección" name="regDireccion" autocomplete="off"></textarea> 
                </div>
              </div>

            </div> 

          </div>

        <div class="modal-footer">
          <button type="reset" class="btn btn-secondary">Limpiar registro</button>
          <button type="submit" class="btn btn-primary" name="actualizarPersonal">Actualizar registro</button>
        </div>

         <?php

          $editarPersonal = new ctrPersonal();
          $editarPersonal -> ctrEditarPersonal();

        ?>

      </form>

    </div>

  </div>

</div>

<?php
  
  $eliminarPersonal = new ctrPersonal();
  $eliminarPersonal->ctrEliminarPersonal();

?>

<script>
  
  function habilitarDocumento()
  {
    var valor = $("option:selected").val();

    if (valor != "") {
      $("#documento").removeAttr('disabled');
    }else{
      $("#documento").attr('disabled', true);
    }
   
  }



</script>
