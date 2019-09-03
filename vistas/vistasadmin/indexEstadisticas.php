<?php
include("../config/global.php");
   $sql = "SELECT IdFactura,Domicilio
    FROM Factura
    ORDER BY Domicilio, IdFfactura"
    
?>

<!doctype html>
<html>
    <head>
        <link rel="shortcut icon" href="#">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link rel="stylesheet" href="../public/Bootstrap_4/css/bootstrap.min.css" >
        <link rel="stylesheet" href="../public/css/estilos.css">
    </head>
    <body>
        <header>
            <h1 class="text-center text-light">Multimarcas</h1>
            <h2 class="text-center text-light"> <span class="badge badge-success">Reportes</span></h2>
        </header>
        
      <div class="text-center">
        <div class="btn-group" role="group" aria-label="">
            <button id="btnColumnas" type="button" class="btn btn-secondary">Prenda Más Vendida</button>
            <button id="btnLineas" type="button" class="btn btn-primary">Empleados</button>  
        </div>
      </div>
        
         <!--En este container se muestran los gráficos-->
        <div id="contenedor" style="min-width: 320px; height: 400px; margin: 0 auto"></div>
              
        <!--Modal para gráficos-->    
        <div id="modal-1" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
             <div class="modal-header">
                    <h5 class="modal-title"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                </div>        
                <div class="modal-body"> 
                    <!--En este container se muestran los gráficos-->
                    <div id="contenedor-modal" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                </div>                    
        </div>
        </div>
        </div>
         <!-- jQuery, Popper.js, Bootstrap JS -->
        <script src="../public/JQuery/jquery-3.3.1.min.js"></script>
        <script src="../public/popper/popper.min.js"></script>
        <script src="../public/Bootstrap_4/js/bootstrap.min.js"></script>    
         <!-- Highcharts JS -->              
        <script src="../public/pluggins/Highcharts_7.0.3/code/highcharts.js"></script>
        <script src="../public/pluggins/Highcharts_7.0.3/code/modules/exporting.js"></script>
        <script src="../public/pluggins/Highcharts_7.0.3/code/modules/export-data.js"></script>        
        
        <script src="../public/pluggins/Highcharts_7.0.3/code/modules/drilldown.js"></script>
        <script src="../public/js/codigoJS.js"></script>
        
    </body>
</html>