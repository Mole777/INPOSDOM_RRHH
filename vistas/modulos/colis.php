<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <h1>Colis Postal</h1>
          <span class="muted">Seguimiento de Paquete</span>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Colis Postal</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card card-outline card-primary">
      <div class="card-header">
        <h3 class="card-title"><button class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">Crear despacho</button></h3>

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
                    <th>Servicio</th>
                    <th>Precinto de Servicio</th>
                    <th>Colectora</th>
                    <th>Peso Real</th>
                    <th>Estafeta de Destino</th>
                    <th>Destinatario</th>
                    <th>Teléfono</th>
                    <th>Fecha</th>
                    <th>Acción</th>
                  </tr>
                </thead>

                <tbody>
                  <!-- DATO FITICIOS -->
                  <tr>
                    <td>Bulto Postal</td>
                    <TD></TD>
                    <TD></TD>
                    <td>0.4</td>
                    <td>SAN FCO. DE MACORIS</td>
                    <td>SOCRATES VARGAS ABREU</td>
                    <td></td>
                    <td>2021-12-13</td>
                    <td>
                      <div class="btn-group" role="group">
                        <button class="btn btn-primary">Ver</button>
                        <button class="btn btn-secondary">Editar</button>
                      </div>
                    </td>  
                  </tr>

                  <tr>
                    <td>Bulto Postal</td>
                    <TD></TD>
                    <TD></TD>
                    <td>2.5</td>
                    <td>SAN FCO. DE MACORIS</td>
                    <td>SOCRATES VARGAS ABREU</td>
                    <td></td>
                    <td>2021-12-13</td>
                    <td>
                      <div class="btn-group" role="group">
                        <button class="btn btn-primary">Ver</button>
                        <button class="btn btn-secondary">Editar</button>
                      </div>
                    </td>
                  
                  </tr>

                  <tr>
                    <td>Bulto Postal</td>
                    <TD></TD>
                    <TD></TD>
                    <td>0.4</td>
                    <td>SAN FCO. DE MACORIS</td>
                    <td>SOCRATES VARGAS ABREU</td>
                    <td></td>
                    <td>2021-12-13</td>
                    <td>
                      <div class="btn-group" role="group">
                        <button class="btn btn-primary">Ver</button>
                        <button class="btn btn-secondary">Editar</button>
                      </div>
                    </td>
                  
                  </tr>

                  <tr>
                    <td>Bulto Postal</td>
                    <TD></TD>
                    <TD></TD>
                    <td>10</td>
                    <td>SAN FCO. DE MACORIS</td>
                    <td>SOCRATES VARGAS ABREU</td>
                    <td></td>
                    <td>2021-12-13</td>
                    <td>
                      <div class="btn-group" role="group">
                        <button class="btn btn-primary">Ver</button>
                        <button class="btn btn-secondary">Editar</button>
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


<!-- MODAL CREAR DESPACHO -->

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Crear despacho</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
        <div class="modal-body">
          <form method="post">

            <div class="row">            
              <div class="col-6">
                <div class="form-group">
                  <label for="servicio"> Servicio: </label>
                  <input type="text" class="form-control" id="servicio" disabled="" placeholder="BULTO POSTAL">
                </div>
              </div>
              <div class="col-6">
                 <div class="form-group">
                  <label for="servicio"> Número de envío: </label>
                  <input type="text" class="form-control" id="servicio" value= "BP<?= random_int(1000000000000, 9999999999999) ?>DO" >
                </div>
              </div>

              <div class="col-6">
                 <div class="form-group">
                  <label for=""> Oficina de destino: </label>
                  <select name="" id="" class="form-control">
                    <option value="">Seleccionar</option>
                  </select>
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <label for=""> Oficiales: </label>
                  <select name="" id="" class="form-control">
                    <option value="">Seleccionar</option>
                  </select>
                </div>
              </div>

              <div class="col-6">
                <div class="form-group">
                  <label for=""> Monitores: </label>
                  <select name="" id="" class="form-control">
                    <option value="">Seleccionar</option>
                  </select>
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <label for="servicio"> Destinatario: </label>
                  <input type="text" class="form-control" id="servicio" placeholder="Destinatario">
                </div> 
              </div>

              <div class="col-6">
                <div class="form-group">
                  <label for="servicio"> País de origen: </label>
                  <input type="text" class="form-control" id="servicio" placeholder="País de  origen">
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <label for="servicio"> Peso: </label>
                  <input type="text" class="form-control" id="servicio" placeholder="Peso en kilogramos">
                </div>
              </div>

              <div class="col-12">
                <div class="form-group">
                  <label for="servicio"> Dirección destinatario: </label>
                  <input type="text" class="form-control" id="servicio" placeholder="Dirección">
                </div>
              </div>

              <div class="col-6">
               <div class="form-group">
                  <label for="servicio"> Teléfono: </label>
                  <input type="text" class="form-control" id="servicio" placeholder="Teléfono">
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <label for="servicio"> Precinto de servicio: </label>
                  <input type="text" class="form-control" id="servicio" placeholder="Precinto">
                </div>
              </div>

              <div class="col-12">
                <div class="form-group">
                  <label for="servicio"> Descripción: </label>
                  <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Descripción"></textarea>
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