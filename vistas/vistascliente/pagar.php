<?php
 include("header.php");
?>


    <?php
       if($_POST){
        $total=0;
        foreach ($_SESSION['carrito'] as $indice=>$prenda) {

         $total=$total+($prenda['precio']*$prenda['cantidad']);
         }
    ?>

      <div class="row">
         <h1 style="margin-top:200px">hola<?php echo $total?></h1> 
      </div>
    <?php
    }
    ?>


<?php
 include("footer.php");
?>