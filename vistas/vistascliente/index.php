<?php
 include("header.php");
?>
  
      <div id="carouselId" class="carousel slide d-sm-none d-md-block d-lg-block " data-ride="carousel">
          <ol class="carousel-indicators">
              <li data-target="#carouselId" data-slide-to="0" class="active"></li>
              <li data-target="#carouselId" data-slide-to="1"></li>
              <li data-target="#carouselId" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner mt-5" role="listbox">
              <div class="carousel-item active">
                  <img src="../../files/carousel/home_slider_1.jpg" height="500" width="100%" alt="First slide">
                  <div class="carousel-caption d-none d-md-block">
                  </div>
              </div>
              <div class="carousel-item">
                  <img src="../../files/carousel/Imagen_Inicio1.jpg" height="500" width="100%" alt="Second slide">
                  <div class="carousel-caption d-none d-md-block">
                  </div>
                    
              </div>
              <div class="carousel-item">
                  <img src="../../files/carousel/Imagen_Inicio3.jpg" height="500" width="100%" alt="Third slide">
                  <div class="carousel-caption d-none d-md-block">
                  </div>
              </div>
          </div>
          <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only ">Next</span>
          </a>
      </div>
      <div class="container">
            <div class="row">
                    <div class="col">
                      <div class="card-group mt-3">
                        <div class="card">
                         
                         <p><button type="button"  class="btn btn-info link"><a style="color:white;" href="mujer.php"> Mujer</button>
                            <img class="card-img-top" height="600" src="../../files/carousel/product_11.jpg" alt=""></a>
                        </p> 
                        </div>
                       
                        <div class="card">
                          <button type="button" class="btn btn-info link"><a style="color:white;" href="hombre.php">Hombre</button>
                          <img class="card-img-top" height="600" src="../../files/hombre/1fondoHombre.jpeg" alt=""></a>
                          
                         
                              
                        </div>
                        <div class="card">
                                <button type="button" class="btn btn-info link">Kids</button>
                                <img class="card-img-top" height="600" src="../../files/hombre/niños.jpeg" alt="">
                               
                                    
                              </div>
                      </div>
                    </div>
            </div>
            <div class="row">
                    <div class="col">
                      <div class="card-group mt-3">
                       
                        <div class="card">
                          <button type="button" class="btn btn-info link2">Tejidos</button> 
                          <img class="card-img-top" height="400" width="100" src="../../files/carousel/textiles.jpg" alt="">
                          
                        </div>
                      </div>
                    </div>
            </div>
 
      </div>
 

</body>
<?php
 include("footer.php");
?> 
</html>