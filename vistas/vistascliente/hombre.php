<?php
 include("header.php");

?>
  <body>
      <div class="alert alert-success mb-5">
      <?php
         echo $mensaje;
       ?>
      </div>
        <div class="home mt-5">
                
                <div class="container">
                <div class="row ">
                       <div class="col-12 " style=" margin-bottom: 35%;">
                       <div class="home_background parallax-window" > <img src="../../files/carousel/home_slider_1.jpg" alt="" width="100%" height="400px" > 
                     </div>
                  </div>
                </div>
                </div>
            </div>
      <div class="container">
            <div class="row mt-2 pr-auto">
                <?php
                      include("../../config/conn.php");
                      $sql="SELECT  c.Nombre
                      FROM    multimarcasramiriqui.Categoria c";
                      $resultado=$base->prepare($sql);
                      $resultado->execute();
                      while($fila=$resultado->fetch(PDO::FETCH_ASSOC)):       
                ?> 
                <div class="col ">
                    <div class="current_page">
                        <ul  class="p-auto">
                          <li><a href="#"><?php echo $fila["Nombre"]?></a></li>    
                        </ul>
                            
                    </div>
                 </div>
                 <?php endwhile;?>
                </div>
            <div class="row mt-1">
                    <div class="col">
                      <div class="card-group mt-1">
                      <?php
                        include("../../config/conn.php");
                        $sql="SELECT  p.idPrenda, p.Nombre,p.Descripcion, p.Precio, p.imagenprincipal
                              FROM    multimarcasramiriqui.prenda p, multimarcasramiriqui.existencia e
                              WHERE   p.IdPrenda=e.IdPrenda AND
                                      p.Genero='Hombre' 
                              GROUP BY p.Descripcion, p.Precio, p.imagenprincipal
                              HAVING SUM(e.Numero)>0";

                        $resultado=$base->prepare($sql);
                        $resultado->execute();

                        while($fila=$resultado->fetch(PDO::FETCH_ASSOC)):
                            
                      ?>  
                          <div class="col-lg-4 col-sm-12">
                            <div class="card mr-3">
                                <a href="detallePrenda.php?idp=<?php echo $fila["idPrenda"]?>">
                                
                                    <button type="submit" name="btnAction" value="<?php echo $fila["idPrenda"]?>" class="btn btn-info btn-lg link">
                                        Ver más...
                                    </button>
                                </a>

                                 <img class="card-i " height="500"  src="../../files/hombre/<?php echo $fila["imagenprincipal"]?>" alt="">
                                <div class="card-body w-100">
                                    <div style="font-size:15px" class="mr-5 product_name align-content-center"><a href="product.html"><?php echo $fila['Nombre']?></a>

                                      <form method="post" action="">
                                         <input type="hidden" name="idPrenda" id="idPrenda" value="<?php echo $fila["idPrenda"]?>">
                                         <input type="hidden" name="imagenprincipal" id="imagenprincipal" value="<?php echo $fila["imagenprincipal"]?>">
                                         <input type="hidden" name="Nombre" id="Nombre" value="<?php echo $fila["Nombre"]?>">
                                         <input type="hidden" name="Descripcion" id="Descripcion" value="<?php echo $fila["Descripcion"]?>">
                                         <input type="hidden" name="Precio" id="Precio" value="<?php echo $fila["Precio"]?>">
                                         <input type="hidden" name="cantidad" id="cantidad" value="1">
                                         <div class="row justify-content-end">
                                        <button type="submit" class="btn btn-info ml-5 py-1 " style="font-size:15px"name="btnAction" value="Agregar">
                                        <i class="fas fa-plus-square"></i>
                                        </button>
                                         </div>
                                      </form>
                                </div>
                                    
                                    <div class="row product_info  ">
                                    <div class="col-6  ">$<?php echo $fila["Precio"]?></div>
                                    </div>
                                  
                                </div>
                                <!-- Button trigger modal -->  
                            </div>
                            </div>
                            <?php endwhile;?>
                        </div>
                    </div>
            </div>
        </div><!--Fin container-->
 <?php
 include("footer.php");
?> 