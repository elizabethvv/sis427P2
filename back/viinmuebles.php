<?php

require_once 'header.php';
?>

<div class="content-wrapper">
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header with-border">
            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <h2>Inmueble
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success" data-bs-toggle="modal"
                  data-bs-target="#modal-registro-cliente">
                  <i class="fa fa-plus-circle"></i> Agregar Inmueble </button>
              </h2>
              <div class="box-tools pull-right">
              </div>
            </div>
            <div class="panel-body table-responsive" id="listadoregistros">
              <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                  <th>Opciones</th>
                  <th>Nombre</th>
                  <th>Apellidos</th>
                  <th>Telefono</th>
                  <th>Email</th>
                  <th>Residencia</th>
                  <th>Estado</th>
                </thead>
                <tbody>
                </tbody>
                <tfoot>
                  <th>Opciones</th>
                  <th>Nombre</th>
                  <th>Apellidos</th>
                  <th>Telefono</th>
                  <th>Email</th>
                  <th>Residencia</th>
                  <th>Estado</th>
                </tfoot>
              </table>
            </div>
            <div><br><br></div>
            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
            </div>
            <!-- Modal -->
            <div class="modal fade" id="modal-registro-cliente" tabindex="-1"
              aria-labelledby="modal-registro-clienteLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header text-center">
                    <h5 class="modal-title" id="modal-registro-clienteLabel">Registrar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form class="form-horizontal form-material">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group mb-4">
                            <label class="col-sm-12">Propietario</label>

                            <div class="col-sm-12 border-bottom">
                              <select class="form-select shadow-none p-0 border-0 form-control-line">
                                <option>London</option>
                                <option>India</option>
                                <option>Usa</option>
                                <option>Canada</option>
                                <option>Thailand</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group mb-4">
                            <label for="example-email" class="col-md-12 p-0">Direcci??n</label>
                            <div class="col-md-12 border-bottom p-0">
                              <input type="email" placeholder="Avenida..." class="form-control p-0 border-0"
                                name="example-email" id="example-email">
                            </div>
                          </div>
                          <div class="form-group mb-4">
                            <label for="example-email" class="col-md-12 p-0">Superficie</label>
                            <div class="col-md-12 border-bottom p-0">
                              <input type="email" placeholder="05/05/12" class="form-control p-0 border-0"
                                name="example-email" id="fechnac">
                            </div>
                          </div>
                          <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Nro. De Habitaciones</label>
                            <div class="col-md-12 border-bottom p-0">
                              <input type="text" placeholder="5" class="form-control p-0 border-0">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Nro. de Ba??os</label>
                            <div class="col-md-12 border-bottom p-0">
                              <input type="text" placeholder="2" class="form-control p-0 border-0">
                            </div>
                          </div>
                          <div class="form-group mb-4">
                            <label class="col-sm-12">Lavadero</label>

                            <div class="col-sm-12 border-bottom">
                              <select class="form-select shadow-none p-0 border-0 form-control-line">
                                <option>Si</option>
                                <option>No</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group mb-4">
                            <label class="col-sm-12">Estado</label>

                            <div class="col-sm-12 border-bottom">
                              <select class="form-select shadow-none p-0 border-0 form-control-line">
                                <option>Alquiler</option>
                                <option>Venta</option>
                                <option>Ambos</option>

                              </select>
                            </div>
                          </div>
                        </div>



                      </div>

                      <div class="form-group mb-4">
                        <div class="col-sm-12">
                          <button class="btn btn-success">Registrar</button>
                        </div>
                      </div>
                    </form>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
</div>

<?php
require_once 'footer.php';


?>