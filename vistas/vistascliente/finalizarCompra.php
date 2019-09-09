<?php
  include("header.php");

?>
    <div class="container">
        <div class="row mt-5">
           <div class="col-lg-6 sm-12 mt-5">
               <div class="card">
                   <div class="card-header">
                   <i class="fas fa-id-badge " style="font-size:30px;"></i><span
                    style="font-family:cursive; font-size:20px;"
                    >   Identificación</span>
                   
                   </div>
                   <div class="card-body">
                       <h4 class="card-title">Datos de Registro</h4>
                       <p class="card-text" style="font-size:10px;">Solicitamos únicamente la información esencial para la finalización de la compra</p>
                   
                  
                  
                       <div class="form-group" >
                         <label for="">Correo</label>
                         <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="Ingresar su dirección de correo">
                       
                            <div class="row">
                                <div class="col-6">
                              <form action="pagar.php" method="post">
                              
                                <label for="">Nombre</label>
                                <input type="text" class="form-control " name="nombre" id="nombre"  placeholder="Nombre"> 
                                </div>
                                <div class="col-6">
                                <label for="">Apellido</label>
                                <input type="email" class="form-control" name="apellido" id="apellido" aria-describedby="emailHelpId" placeholder="Apellidos">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                <label for="">Cedula de Ciudadanía</label>
                                <input type="text" class="form-control " name="cedula" id="cedula"  placeholder="Cedula de Ciudadanía"> 
                                </div>
                                <div class="col-6">
                                <label for="">Celular</label>
                                <input type="email" class="form-control" name="celular" id="celular"  placeholder="Celular">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-8">
                                <label for="">Dirección</label>
                                <input type="text" class="form-control " name="direccion" id="direccion"  placeholder="Dirección"> 
                                </div>
                                <div class="col-4 ">
                                    <h4>Medio de pago</h4>
                                    <label class="form-check-label">
                                    PayPAL<input class="form-check-input" type="radio" name="efecty" id="efecty" value="checkedValue">
                                    </label>
                                </div>
                            </div>
                                   <label class="form-check-label">
                                     <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue" >
                                     Acepto Terminos y condiciones
                                   </label>
                                   <button type="submit" name="btnAction" value="proceder" id="continuar" class="btn btn-info btn-lg btn-block mt-3">Finalizar Compra</button>
                           </form>     
                         </div> 
                     </div>
                   <div class="card-footer text-muted">
                       Footer
                   </div>
               </div>
               </div> <!--fin de la card 1-->
                <div class="col-lg-5  sm-12">
               <div class="card">
                   <div class="card-header">
                       Resumen de la Compra
                   </div>
                   <div class="card-body">
                     <?php
                       include("compra.php");
                     ?>
                   </div>
                   <div class="card-footer text-muted">
                       Footer
                   </div>
                </div>
              </div>
           </div>
          
        </div>
        
    </div>



<?php
    include("footer.php");
?>