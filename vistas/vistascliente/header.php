/*<?php
include("carrito.php");

?>*/
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
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
      <div class="container">
          <header class="row justify-content-center fixed-top bg-white ">
            <img src="../img/logo.jpeg" alt="" class="row " height="60">
              <nav class="col-12 navbar navbar-expand-sm navbar-light bg-light">
                  <a class="navbar-brand" href="#"><i class="fas fa-home"></i></a>
                  <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                      aria-expanded="false" aria-label="Toggle navigation"></button>
                  <div class="collapse navbar-collapse" id="collapsibleNavId">
                      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                          
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mujeres</a>
                              <div class="dropdown-menu" aria-labelledby="dropdownId">
                                  <a class="dropdown-item" href="#">Blusas</a>
                                  <a class="dropdown-item" href="#">Jeans</a>
                                  <a class="dropdown-item" href="#">Chaquetas</a>
                                  <a class="dropdown-item" href="#">Colletion</a>
                              </div>
                          </li>
                          <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hombre</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownId">
                                    <a class="dropdown-item" href="#">Blusas</a>
                                    <a class="dropdown-item" href="#">Jeans</a>
                                    <a class="dropdown-item" href="#">Chaquetas</a>
                                    <a class="dropdown-item" href="#">Colletion</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kids</a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                                        <a class="dropdown-item" href="#">Blusas</a>
                                        <a class="dropdown-item" href="#">Jeans</a>
                                        <a class="dropdown-item" href="#">Chaquetas</a>
                                        <a class="dropdown-item" href="#">Colletion</a>
                                    </div>
                                </li>
                      </ul>
                          <button class="btn btn-outline-info my-3 my-sm-0"><a  href="mostrarCarrito.php"><i class="fas fa-shopping-bag"></i>(
                               <?php
                                 echo(empty($_SESSION['carrito']))?0:count($_SESSION['carrito']);
                                ?> )
                          </a></button>
                      <form class="form-inline my-2 my-lg-0">
                          <button class="btn btn-outline-info my-3 my-sm-0" type="submit" href="login.php"><i class="fas fa-user-circle">
                         
                          </i></button>
                      </form>
                  </div>
              </nav>
          </header>
        
      </div>
      