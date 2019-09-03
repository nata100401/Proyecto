<?php
require 'header.php';
?>

<div  style="margin-left:20%;width:30%; background:linear-gradient(30deg, crimson,sienna, royalblue, indianred, purple);" >
<a href="#" > <i style="margin-left:42%; font-size:70px; color:white;" class="fa fa-instagram "></i></a>             
</div>



      <?php
    include("../config/conex.php");
    $sql="SELECT p.Descripcion, p.Genero, p.Precio, p.Condicion
        FROM    multimarcasramiriqui.prenda p";

    $resultado=$base->prepare($sql);
    $resultado->execute();
    ?>
     


        <div class="home mt-5">
                <div class="container">
  
                <div class="row ">
                       <div class="col-12 ">
        <h4 _ngcontent-bth-c6="" class="card-title">Prendas</h4>
    </div>
    <div _ngcontent-bth-c6="" class="card-content">
        
        <table _ngcontent-bth-c6="" class="table table-responsive-sm text-center">
            
            <thead _ngcontent-bth-c6="">
                <tr _ngcontent-bth-c6="">
                    
                    <th _ngcontent-bth-c6="">Descripcion</th>
                    <th _ngcontent-bth-c6="">Genero</th>
                    <th _ngcontent-bth-c6="">Valor</th>
                </tr>
            </thead>
            
            <tbody _ngcontent-bth-c6="">
            <?php
              while($fila=$resultado->fetch(PDO::FETCH_ASSOC)):
                            
    ?>
                <tr _ngcontent-bth-c6="">
                    <td _ngcontent-bth-c6=""><?php echo $fila["Descripcion"]?></td>
                    <td _ngcontent-bth-c6=""><?php echo $fila["Genero"]?></td>
                    <td _ngcontent-bth-c6=""><?php echo $fila["Precio"]?></td>
                </tr>  
                
            
            <a _ngcontent-bth-c6="" class="danger" data-original-title="" title="">
            <?php endwhile;?> 
                <i _ngcontent-bth-c6="" class="ft-x"></i></a></td></tr></tbody></table></div></div></div>
</body>




<?php
require 'footer.php';
?>