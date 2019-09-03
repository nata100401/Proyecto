<?php
require 'header.php';
?>
      <div class="content-wrapper">    
        <section class="content">
            <div class="row">
              <div class="col-md-12">
                  <div class="box">
                    <div class="box-header with-border">
                          <h1 class="box-title">Prenda<button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar</button></h1>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <div class="panel-body table-responsive" id="listadoregistros">
                      <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                          <thead>
                            <th>Opciones</th>
                            <th>Categoria</th>
                            <th>Proveedor</th>
                            <th>Genero</th>
                            <th>Descripcion</th>
                            <th>Garantia</th>
                            <th>Referencia</th>
                            <th>Precio</th>
                            <th>Descuento</th>
                            <th>Estado</th>
                          </thead>
                          <tbody>                            
                          </tbody>
                        </table>
                    </div>
                    <div class="panel-body"  id="formularioregistros">
                        <form name="formulario" id="formulario" method="POST">

                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="IdPrenda" id="IdPrenda">
                            <label>Categoría:</label>
                            <select id="IdCategoria" name="IdCategoria" class="form-control selectpicker" data-live-search="true"></select>
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Proveedor:</label>
                            <select id="IdProveedor" name="IdProveedor" class="form-control selectpicker" data-live-search="true"></select>
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Genero:</label>
                            <input type="text" class="form-control" name="Genero" id="Genero" maxlength="256" placeholder="Genero" required>
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Descripción:</label>
                            <input type="text" class="form-control" name="Descripcion" id="Descripcion" maxlength="256" placeholder="Descripcion" required>
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Tiempo de Garantia:</label>
                            <input type="text" class="form-control" name="TiempoGarantiaMes" id="TiempoGarantiaMes" maxlength="256" placeholder="Tiempo de Garantia" required>
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Referencia de prenda:</label>
                            <input type="text" class="form-control" name="ReferenciaPrenda" id="ReferenciaPrenda" maxlength="256" placeholder="Referencia de la Prenda" required>
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Precio:</label>
                            <input type="text" class="form-control" name="Precio" id="Precio" maxlength="256" placeholder="Precio" required>
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Descuento:</label>
                            <input type="text" class="form-control" name="Desc" id="Desc" maxlength="256" placeholder="Descuento de la Prenda" required>
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
<script src="Scripts/prenda.js"></script>


