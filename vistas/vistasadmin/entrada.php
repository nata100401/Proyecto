<?php
require 'header.php';
?>
      <div class="content-wrapper">    
        <section class="content">
            <div class="row">
              <div class="col-md-12">
                  <div class="box">
                    <div class="box-header with-border">
                          <h1 class="box-title">Entradas<button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar</button></h1>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <div class="panel-body table-responsive" id="listadoregistros">
                      <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                          <thead>
                            <th>Opciones</th>
                            <th>Prenda</th>
                            <th>Proveedor</th>
                            <th>Color</th>
                            <th>Cantidad</th>
                            <th>Fecha</th>
                            <th>Talla</th>
                          </thead>
                          <tbody>                            
                          </tbody>
                        </table>
                    </div>
                    <div class="panel-body"  id="formularioregistros">
                        <form name="formulario" id="formulario" method="POST">

                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="IdEntrada" id="IdEntrada">
                            <label>Prenda:</label>
                            <select id="IdPrenda" name="IdPrenda" class="form-control selectpicker" data-live-search="true"></select>
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Proveedor:</label>
                            <select id="IdProveedor" name="IdProveedor" class="form-control selectpicker" data-live-search="true"></select>
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Color:</label>
                            <select id="IdColor" name="IdColor" class="form-control selectpicker" data-live-search="true"></select>
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Cantidad:</label>
                            <input type="text" class="form-control" name="Cantidad" id="Cantidad" maxlength="256" placeholder="Cantidad" required>
                          </div>
                         <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Fecha:</label>
                            <input type="date" class="form-control" name="Fecha" id="Fecha" placeholder="Fecha" required>
                            </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Talla:</label>
                            <input type="text" class="form-control" name="Talla" id="Talla" maxlength="256" placeholder="Talla" required>
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
<script src="../Scripts/entrada.js"></script>


