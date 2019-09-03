<?php
require 'header.php';
?>
      <div class="content-wrapper">    
        <section class="content">
            <div class="row">
              <div class="col-md-12">
                  <div class="box">
                    <div class="box-header with-border">
                          <h1 class="box-title">Tabla <button class="btn btn-success" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar</button></h1>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <div class="panel-body table-responsive" id="listadoregistros">
                        
                      <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                      <thead>
                      <th>Opciones</th>
                      <th>Nombre</th>
                      <th>Apellido</th>
                      <th>Telefono</th>
                      <th>Email</th>
                      <th>Documento</th>
                      <th>Direccion</th>
                      <th>Clave</th>
                      </thead>
                      </table>  
                    </div>
                    <div class="panel-body" style="height: 400px;" id="formularioregistros">
                    <form name="formulario" id="formulario" method="POST">
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">

                          <label>Nombre:</label>
                          <input type="hidden" name="IdCliente" id="IdCliente">
                          <input type="text" class="form-control" name="Nombre" id="Nombre" maxlength="50" placeholder="Nombre del cliente" required>
                          </div>

                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <label>Apellido:</label>
                          <input type="text" class="form-control" name="Apellido" id="Apellido" maxlength="256" placeholder=" Apellido del cliente">
                          </div>

                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <label>Telefono:</label>
                          <input type="text" class="form-control" name="Telefono" id="Telefono" maxlength="256" placeholder=" Telefono del cliente">
                          </div>

                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <label>Email:</label>
                          <input type="text" class="form-control" name="Email" id="Email" maxlength="256" placeholder=" Email del cliente">
                          </div>

                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <label>Documento:</label>
                          <input type="text" class="form-control" name="Documento" id="Documento" maxlength="256" placeholder=" Documento del cliente">
                          </div>

                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <label>Direccion:</label>
                          <input type="text" class="form-control" name="Direccion" id="Direccion" maxlength="256" placeholder=" Direccion del cliente">
                          </div>

                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <label>Clave:</label>
                          <input type="text" class="form-control" name="Clave" id="Clave" maxlength="256" placeholder=" Clave del cliente">
                          </div>

                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"> Guardar</i></button>

                          <button class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left">Cancelar</i></button>
                          </div>
                          
                        </form>  
                    </div>
                  </div>
              </div>>
          </div>
      </section>


<?php
require 'footer.php';
?>
<script src="Scripts/cliente.js"></script>
