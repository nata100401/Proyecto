<?php
 include("header.php");
?>
<body>

<div class="super_container">
	

	<!-- Product -->

	<div class="product">
		<div class="container">
		<div id="carouselId" class="carousel slide d-sm-none d-md-block d-lg-block " data-ride="carousel">
          <ol class="carousel-indicators">
              <li data-target="#carouselId" data-slide-to="0" class="active"></li>
              <li data-target="#carouselId" data-slide-to="1"></li>
              <li data-target="#carouselId" data-slide-to="2"></li>
          </ol>

          <?php
                $codprenda=$_GET["idp"];
                include("../../config/conn.php");
                $sql="SELECT  p.idPrenda, p.Descripcion,p.Nombre, p.Precio, p.imagenprincipal, f.Imagen
						    FROM    multimarcasramiriqui.prenda p, multimarcasramiriqui.existencia   e, multimarcasramiriqui.foto f
							  WHERE   p.IdPrenda=e.IdPrenda AND
									      f.idPrenda=p.idPrenda AND
							          p.idPrenda='$codprenda'";
                        
						

							$resultado=$base->prepare($sql);
							$resultado->execute(array());
							$fila=$resultado->fetch(PDO::FETCH_ASSOC);
							$num_filas=$resultado->rowCount();   
					  ?>
          <div class="carousel-inner mt-5" role="listbox">
              <div class="carousel-item active">
                  <img src="../img/home_slider_1.jpg" height="580" width="100%" alt="First slide">
                  <div class="carousel-caption d-none d-md-block">
                  </div>
              </div>
              <div class="carousel-item">
                  <img src="../img/Imagen_Inicio2.jpg" height="580" width="100%" alt="Second slide">
                  <div class="carousel-caption d-none d-md-block">
                  </div>
              </div>
              <div class="carousel-item">
                  <img src="../img/Imagen_Inicio3.jpg" height="580" width="100%" alt="Third slide">
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

				<!-- Product Content -->
				<div class="col-lg-5">
					<div class="product_content">
						<div class="product_name">Traje de baño 2 piezas</div>
						<div class="product_price">$35.000</div>
						<div class="rating rating_4" data-rating="4">
						</div>
						<div class="product_text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis quam ipsum. Pellentesque consequat tellus non tortor tempus, id egestas elit iaculis. Proin eu dui porta, pretium metus vitae, pharetra odio. Sed ac mi commodo, pellentesque erat eget, accumsan justo. Etiam sed placerat felis. Proin non rutrum ligula.</p>
						</div>
						<!-- Product Quantity -->
						<div class="product_quantity_container">
							<span>Quantity</span>
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
							<div class="product_size">
								<ul class="d-flex flex-row align-items-start justify-content-start">
									<li>
										<input type="radio" id="radio_1" name="product_radio" class="regular_radio radio_1">
										<label for="radio_1">XS</label>
									</li>
									<li>
										<input type="radio" id="radio_2" name="product_radio" class="regular_radio radio_2" checked>
										<label for="radio_2">S</label>
									</li>
									<li>
										<input type="radio" id="radio_3" name="product_radio" class="regular_radio radio_3">
										<label for="radio_3">M</label>
									</li>
									<li>
										<input type="radio" id="radio_4" name="product_radio" class="regular_radio radio_4">
										<label for="radio_4">L</label>
									</li>
									<li>
										<input type="radio" id="radio_5" name="product_radio" class="regular_radio radio_5">
										<label for="radio_5">XL</label>
									</li>
								</ul>
							</div>
							<div style="width:190px;" class="button cart_button"><a href="carrito.html">Agregar al pedido</a></div>
						</div>
					</div>
				</div>
			</div><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/product_custom.js"></script>
</body>
</html>