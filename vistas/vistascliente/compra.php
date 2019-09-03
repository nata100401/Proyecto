<h3 style="margin-top:10%;margin-left:10%;">Mi Carrito</h3>
  <?php if(!empty($_SESSION['carrito'])) { ?>
        <table class="table table-hover ">
            <thead>
            <tr>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Total</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php $total=0; ?>
            <?php 
              foreach($_SESSION['carrito'] as $indice=>$prenda){ ?>
             <tr>
                <td><img height="50" width="50" src="../images/mujer/camisas/<?php echo $fila["imagenprincipal"]?>" alt=""><?php echo $prenda['descripcion']?></td>
                <td><?php echo $prenda['cantidad']?></td>
                <td>$<?php echo number_format($prenda['precio']*$prenda['cantidad'],2);?></td>
                <td> 
                    <form method="post" action=""> 
                        <input type="hidden" name="idPrenda" id="idPrenda" value="<?php echo $prenda["id"]?>">
                        <!-- <a href="carrito.php?id=<"><input class="btn btn-danger" type="button" name="btnAction" value="Eliminar"></a> -->
                        <button type="submit" name="btnAction" value="Eliminar" class="btn btn-danger">x</button>

                    </form>
                </td>
                
            </tr>
            <?php $total=$total+$prenda['precio']*$prenda['cantidad']; ?>
            <?php } ?> <!--Cierre del foreach-->
            <tr>
                <td colspan="3"><h3>Total</h3></td>
                <td><h3>$<?php echo number_format($total);?></h3></td>
                <td></td>
                
            </tr>
            
            </tbody>
        </table>
  <?php
    }else
     {?> <!--Cierre del if valida si la variable session no esta vacia-->
        <div class="alert alert-success" style="margin-top:8%;" role="alert">
        Su carrito esta vacio
        </div>
        <button class="btn btn-outline-info my-3 my-sm-0"  href="index.php">
        <a href="index.php" class="alert-link"> Elegir productos</a> 
        </button>
  <?php } ?><!--Cierre del else-->