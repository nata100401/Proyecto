<?php
require 'header.php';
?>
      <div class="content-wrapper">  
        <section class="content">
            <div class="row">
              <div class="col-md-12">
                  <div class="box">
                    <div class="box-header with-border">
                          <h1 class="box-title">Proveedor<button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar</button></h1>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <div class="panel-body table responsive"  id="listadoregistros">
                    <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                          <thead>
                            <th>Opciones</th>
                            <th>Nombre</th>
                            <th>Departamento</th>
                            <th>Ciudad</th>
                            <th>Telefonos</th>
                            <th>NIT</th>
                            <th>Email</th>
                          </thead>
                          <tbody>                            
                          </tbody>
                        </table>
                        </div>
                        <div class="panel-body"  id="formularioregistros">
                        <form name="formulario" id="formulario" method="POST">

                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Nombre:</label>
                            <input type="hidden" name="IdProveedor" id="IdProveedor">
                            <input type="text" class="form-control" name="Nombre" id="Nombre" maxlength="100" placeholder="Nombre" required>
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Departamento:</label>
                            <select id="IdDepartamento" name="IdDepartamento" onchange="listarciudades()" class="form-control selectpicker" data-live-search="true" required></select>
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Ciudad:</label>
                            <select id="IdCiudad" name="IdCiudad" class="form-control selectpicker" data-live-search="true" required></select>
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Telefonos:</label>
                            <input type="text" class="form-control" name="Telefonos" id="Telefonos" maxlength="256" placeholder="Telefonos">
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>NIT:</label>
                            <input type="text" class="form-control" name="NIT" id="NIT" maxlength="256" placeholder="NIT">
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Email:</label>
                            <input type="text" class="form-control" name="Email" id="Email" maxlength="256" placeholder="Email">
                          </div>
                          <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> Guardar</button>

                            <button class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
                          </div>
                        </form> 
                    </div>
                  </div>
              </div>
          </div>
        </section>
 
<?php
require 'footer.php';
?>
<script type="text/javascript" src="../public/js/JsBarcode.all.min.js"></script>
<script type="text/javascript" src="../public/js/jquery.PrintArea.js"></script>
<script src="../Scripts/lugares.js"></script>