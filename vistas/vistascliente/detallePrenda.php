<?php
 include("header.php");
?>
<body>
<div class="row">
<div class="col-5">
  <div id="carouselId" class="carousel slide d-sm-none d-md-block d-lg-block " data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                <li data-target="#carouselId" data-slide-to="1"></li>
                <li data-target="#carouselId" data-slide-to="2"></li>
            </ol>

            <?php
                  $codprenda=$_GET["idp"];
                  include("../../config/conn.php");
                  $sql="SELECT  p.idPrenda,p.Nombre, p.Descripcion, p.Precio,f.Imagen,p.imagenprincipal,e.Talla, cl.ImagenColor
                  FROM    bdmultimarcas.prenda p, bdmultimarcas.existencia   e, bdmultimarcas.foto f, bdmultimarcas.color cl
                  WHERE   p.idPrenda=e.IdPrenda AND
                          e.IdExistencia=f.IdExistencia AND
                          p.Genero='Mujer' AND
                          e.IdColor=cl.IdColor AND
                          p.idPrenda=$codprenda";
                          
                  $resultado=$base->prepare($sql);
                  $resultado->execute(array());
                  $fila=$resultado->fetch(PDO::FETCH_ASSOC);
                  $num_filas=$resultado->rowCount(); 
                  $nom=$fila["Nombre"];
                  $desc=$fila["Descripcion"]; 
                  $pre=$fila["Precio"];

                  
             ?>
            <div class="carousel-inner mt-5" role="listbox">
                <div class="carousel-item active mt-5 ml-3">
                    <img src="../../files/mujer/inicio/<?php echo $fila["imagenprincipal"] ?>"  height="600" width="95%" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
            <?php
                  while($fila=$resultado->fetch(PDO::FETCH_ASSOC)):	
			?>
                <div class="carousel-item mt-5  ml-3">
                    <img src="../..files/mujer/inicio/<?php echo $fila[""] ?>" height="580" width="100%" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
            <?php
				 endwhile;
		    ?>
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
           
   </div> <!--Fin de col carousel--> 
      <div class="col-5 " style="margin-top:10%">
      <div class="product_content">
                        <div class="product_name"><?php echo $nom ?></div>
                        <div class="mt-5"><p><?php echo $desc ?></p></div>
						<div class="product_price">$<?php echo $pre ?></div>
						<div class="rating rating_4" data-rating="4">
						</div>
						<div class="product_text">
							<p><?php echo $fila["Descripcion"] ?></p>
						</div>
						<!-- Product Quantity -->
						<div class="product_quantity_container">
							<span>Cantidad </span>
							<div class="product_quantity clearfix">
								<input id="quantity_input" type="text" pattern="[0-9]*" value="1">
								<div class="quantity_buttons">
									<div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fa fa-caret-up" aria-hidden="true"></i></div>
									<div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fa fa-caret-down" aria-hidden="true"></i></div>
								</div>
							</div>
						</div>
                        <!-- Product Size -->
                      
						<div class="product_size_container">
                            <span>Talla</span>
            
							<div class="product_size ">
								<ul class="d-flex flex-row align-items-start justify-content-start">
									<li>
										<input type="radio" id="radio_1" name="product_radio" class="regular_radio radio_1">
										<label for="radio_1"> UNICA </label>
									</li>
								
								</ul>
                            </div>
                            
							<form method="post" action="">
                                         <input type="text" name="idPrenda" id="idPrenda" value="<?php echo $codprenda?>">
                                         <input type="hidden" name="imagenprincipal" id="imagenprincipal" value="<?php echo $fila["imagenprincipal"]?>">
                                         <input type="hiden" name="Nombre" id="Nombre" value="<?php echo $nom?>">
                                         <input type="hiden" name="Descripcion" id="Descripcion" value="<?php echo $desc?>">
                                         <input type="hiden" name="Precio" id="Precio" value="<?php echo $pre?>">
                                         <input type="hiden" name="cantidad" id="cantidad" value="1">
                                        <button type="submit" class="btn btn-info ml-5 py-1 " style="font-size:15px" name="btnAction" value="Agregar">
										Agregar al carrito
                                        </button>
                                      </form>
						</div>
					</div>
      </div><!--Fin de col Detalle--> 
</div> <!--Fin de row carousel y detalle-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
<?php
 include("footer.php");
?>
</html>