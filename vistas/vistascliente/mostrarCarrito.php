<?php
 include("header.php");

?>

<h3 style="margin-top:10%;margin-left:10%;">Mi Carrito</h3>
  <?php if(!empty($_SESSION['carrito'])) { ?>
        <table class="table table-hover m-5">
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
                <td><img height="50" width="50" src="../images/mujer/camisas/<?php echo $prenda['imagen']?>" alt=""><?php echo $prenda['descripcion']?></td>
                <td><?php echo $prenda['cantidad']?></td>
                <td>$<?php echo number_format($prenda['precio']*$prenda['cantidad'],2);?></td>
                <td> 
                    <form method="post" action=""> 
                        <input type="hidden" name="idPrenda" id="idPrenda" value="<?php echo $prenda["id"]?>">
                        <!-- <a href="carrito.php?id=<"><input class="btn btn-danger" type="button" name="btnAction" value="Eliminar"></a> -->
                        <button type="submit" name="btnAction" value="Eliminar" class="btn btn-danger">Eliminar</button>

                    </form>
                </td>
            </tr>
            <?php $total=$total+$prenda['precio']*$prenda['cantidad']; ?>
            <?php } ?> <!--Cierre del foreach-->
            <tr>
                <td colspan="3"><h3>Total</h3></td>
                <td><h3>$<?php echo number_format($total);?></h3></td>   
            </tr>
           
           
            </tbody>
        </table>
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

<?php
 include("footer.php");
?>