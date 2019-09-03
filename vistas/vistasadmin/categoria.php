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
                      </thead>
                      </table>  
                    </div>
                    <div class="panel-body" style="height: 400px;" id="formularioregistros">
                    <form name="formulario" id="formulario" method="POST">
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">

                          <label>Nombre:</label>
                          <input type="hidden" name="IdCategoria" id="IdCategoria">
                          <input type="text" class="form-control" name="Nombre" id="Nombre" maxlength="50" placeholder="Nombre de la categoria" required>
                          </div>

                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"> Guardar</i></button>

                          <button class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left">Cancelar</i></button>
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
<script src="Scripts/categoria.js"></script>
