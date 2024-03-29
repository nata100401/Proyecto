<?php
include("carrito.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Multimarcas</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Wish shop project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="../../public/css/estilos.css">
    <link rel="stylesheet" href="../../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../public/styles/bootstrap4/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../public/styles/product.css">
    <link rel="stylesheet" type="text/css" href="../../public/styles/product_responsive.css">
    <link rel="stylesheet" href="../../public/css/cart2.css">
    <link rel="stylesheet" href="../../public/css/cart_responsive.css">
   
</head>
 <body>
      <div class="container">
          <header class="row justify-content-center fixed-top bg-white ">
            <img src="../../files/logo.jpeg" alt="" class="row " height="60">
              <nav class="col-12 navbar navbar-expand-sm navbar-light bg-light">
                  <a class="navbar-brand"  href="index.php"><i style="padding:3%; font-size:30px;" class="fas fa-home"></i></a>
                  <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                      aria-expanded="false" aria-label="Toggle navigation"></button>
                  <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                          
                          <li class="nav-item dropdown">
                            <a style="font-size:20px;" class="nav-link dropdown-toggle" href="mujer.php" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mujeres</a>
                            
                          </li>
                          <li class="nav-item dropdown">
                                <a  style="font-size:20px;" class="nav-link dropdown-toggle" href="hombre.php" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hombre</a>
                              
                            </li>
                            <li class="nav-item dropdown">
                                    <a  style="font-size:20px;" class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kids</a>
                                   
                           </li>
                     </ul>
                          <button class="btn btn-outline-info my-3 my-sm-0"><a   style="font-size:12px;" href="mostrarCarrito.php"><i class="fas fa-shopping-bag" style="padding:5px; font-sixe:12px;"></i>(
                               <?php
                                 echo(empty($_SESSION['carrito']))?0:count($_SESSION['carrito']);
                                ?> )
                          </a></button>

                          <button class="btn btn-outline-info my-3 my-sm-0" ><a href="mapa.php"><i class="fas fa-map-marker-alt" style="padding:5px; font-sixe:12px;"></i></a></button>
    
                          <button class="btn btn-outline-info my-3 my-sm-0" data-toggle="modal" data-target="#modelId"><i  style="font-size:22px;"class="fas fa-user-circle" style="padding:5px; font-sixe:12px;">

                          </i></button>
                          

                    </div>
                  </nav>
         </header> 
         <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" >
           <div class="row  mt-5">
           <div class="col-12  mr-2">
             <div class="modal-dialog" role="document">
               <div class="modal-content">
                   <div class="modal-header">
                       <h5 class="modal-title">Iniciar Sesión</h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                         </button>
                     </div>
                 <div class="modal-body">
                            <div class="container-fluid">
                            <div class="login-box">
                            <div class="login-box-body">
                            <p class="login-box-msg">Ingrese sus datos de acceso</p>
              
              
              

                            <form method="post" id="frmAcceso">
                                    <div class="form-group">
                                    <label for="exampleInputEmail1">Email </label>
                                    <input type="email" class="form-control" id="cliente" name="cliente" aria-describedby="emailHelp" placeholder="Enter email">
                                    <small id="emailHelp" class="form-text text-muted">Ingresar su dirrecion de correo</small>
                                    </div>
                                    <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="clave" name="clave" placeholder="Password">
                                    </div>
                                   
                                   
                            </form>

              
                          </div>
                        </div>
                      </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <a href="../vistasadmin/categoria.php"><button type="button" class="btn btn-primary">Ingresar</button></a>
                          </div>
                </div>
              </div>
             </div>
            </div> 
           </div> 
          </div>

       </div> 
           

          
           <script>
             $('#exampleModal').on('show.bs.modal', event => {
               var button = $(event.relatedTarget);
               var modal = $(this);
               // Use above variables to manipulate the DOM
               
             });
           </script> 
     
              <script>
            function initFreshChat() {
              window.fcWidget.init({a
                token: "cd3f5466-8721-4bb5-ae74-f90e9a1e755c",
                host: "https://wchat.freshchat.com"
              });
            }
            function initialize(i,t){var e;i.getElementById(t)?initFreshChat():((e=i.createElement("script")).id=t,e.async=!0,e.src="https://wchat.freshchat.com/js/widget.js",e.onload=initFreshChat,i.head.appendChild(e))}function initiateCall(){initialize(document,"freshchat-js-sdk")}window.addEventListener?window.addEventListener("load",initiateCall,!1):window.attachEvent("load",initiateCall,!1);
          </script>   
      

