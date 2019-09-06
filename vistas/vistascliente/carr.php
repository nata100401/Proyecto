<?php
 include("header.php");

?>


<div id="my-carousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li class="active" data-target="#my-carousel" data-slide-to="0" aria-current="location"></li>
        <li data-target="#my-carousel" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="../../files/carousel/home_slider_1.jpg" alt="">
            <div class="carousel-caption d-none d-md-block">
                <h5>Title</h5>
                <p>Text</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="../../files/carousel/Imagen_Inicio1.jpg" alt="">
            <div class="carousel-caption d-none d-md-block">
                <h5>Title</h5>
                <p>Text</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#my-carousel" data-slide="prev" role="button">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#my-carousel" data-slide="next" role="button">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!-- fomulario -->


<div class="container">
    <div class="row justify-content-center">
        <div class="col  col-lg-6"
     style="background:#DCDCDC; padding:15px"> 
            <div class="form-group">
              <h3 class="row justify-content-center">Iniciar sesion</h3>
              <label for="">Email</label>
              <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="Ingresar Email">
              <label for="">Contraseña</label>
              <input type="password" class="form-control" name="clave" id="clave"  placeholder="Ingresar Contraseña">
            </div>
                <div class="row  ml-2 mb-2 ">
                <a href="finalizarCompra.php">Registrate</a>
                </div>
            <button type="submit" name="btnAction" value="finalizar"
                  class="col gn-end btn btn-block btn-info "><a href="finalizarCompra.php" style="color:white;">Finalizar Compra</a> 
             </button>
        
        </div>
       
    </div>
</div>

