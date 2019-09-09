<?php
require 'header.php';
?>
<!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">        
        <!-- Main content -->
        <section class="content">
            <div class="row">
              <div class="col-md-12">
                  <div class="box">
                    <div class="box-header with-border">
                          <h1 class="box-title">Tabla <button class="btn btn-success" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar</button></h1>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body table-responsive" id="listadoregistros">
                        
                        <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                        <thead>
                          <th>Opciones</th>
                          <th>Nombre</th>
                          <th>Apellido</th>
                          <th>Documento</th>
                          <th>Telefono</th>
                          <th>Rol</th>
                          <th>Clave</th>
                          <th>Estado</th>
                        </thead>
                        </table>
                    </div>
                    <div class="panel-body"  style="height: 400px;" id="formularioregistros">
                        <form name="formulario" id="formulario" method="POST">
							<div class="form-group col-lg-6 col-md-6  col-sm-6 con-xs-6 ">
							  <label>Nombre</label>
							  <input type="hidden" name="IdEmpleado" id="IdEmpleado" >
							  <input type="text" class="form-control" name="Nombre" id="Nombre" maxlength="256" placeholder="Nombre" required>
							</div>
							<div class="form-group col-lg-6 col-md-6 col-ms-6 col-xs-12">
							  <label >Apellido:</label>
							  <input type="text" name="Apellido" id="Apellido" maxlength="256" class="form-control" placeholder="Apellido" >
							</div>
                            <div class="form-group col-lg-6 col-md-6 col-ms-6 col-xs-12">
							  <label >Documento:</label>
							  <input type="text" name="Documento" id="Documento" maxlength="256" class="form-control" placeholder="Documento" >
							</div>
                            <div class="form-group col-lg-6 col-md-6 col-ms-6 col-xs-12">
							  <label >Telefono:</label>
							  <input type="text" name="Telefono" id="Telefono" maxlength="256" class="form-control" placeholder="Telefono" >
							</div>
                            <div class="form-group col-lg-6 col-md-6 col-ms-6 col-xs-12">
							  <label >Rol:</label>
							  <input type="text" name="Rol" id="Rol" maxlength="256" class="form-control" placeholder="Rol" >
							</div>
                            <div class="form-group col-lg-6 col-md-6 col-ms-6 col-xs-12">
							  <label >Clave:</label>
							  <input type="text" name="Clave" id="Clave" maxlength="256" class="form-control" placeholder="Clave" >
							</div>

							<div class="form-group col-lg-12 col-md-12 col-ms-12 col-xs-12">
							 <button class="btn btn-primary" type="submit" id="btnGuardar" ><i class="fa fa-save"></i> Guardar</button>

							 <button class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
							</div>
						</form>
					 </div> 
                  </div>
              </div>
          </div>
      </section>
    </div>
    
<?php
require 'footer.php';
?>
<script src="../Scripts/empleado.js"></script>