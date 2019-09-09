<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Multimarcas</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="../../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../public/css/font-awesome.css">
    <link rel="stylesheet" href="../../public/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../../public/css/_all-skins.min.css">
    <link rel="apple-touch-icon" href="../../public/img/apple-touch-icon.png">
    <link rel="shortcut icon" href="../../public/img/logo.jpeg">

  <link rel="stylesheet" href="../../public/datatables/jquery.dataTables.min.css">
  <link rel="stylesheet" href="../../public/datatables/buttons.dataTables.min.css">
  <link rel="stylesheet" href="../../public/datatables/responsive.dataTables.min.css">
  <link rel="stylesheet" href="../../public/css/bootstrap-select.min.css">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/c5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> -->
    <link rel="stylesheet" type="text/css" href="../../public/css/bootstrap-select.min.css">

  </head>
  <body class="hold-transition skin-blue-light sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <a href="index2.html" class="logo">
         <!-- <span class="logo-mini"><i class="fa fa-eye"></i></span> -->
          <span class="logo-lg"><b>Multimarcas</b></span>
        </a>

        <nav style="background-image: linear-gradient(to right, rgba(255,0,0,0), turquoise);" class="navbar navbar-static-top" role="navigation">
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navegación</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                </a>
                <ul class="dropdown-menu">
                  <li class="user-header">
                    <img src="../../public/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    
                  </li>
                  
                  <li class="user-footer">
                    
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Cerrar</a>
                    </div>
                  </li>
                </ul>
              </li>
              
            </ul>
          </div>

        </nav>
      </header>
      <aside  style=" background-image: linear-gradient( #3C8DBC,turquoise);" class="main-sidebar">
        <section class="sidebar">       
          <ul class="sidebar-menu">
            <li style="background:#3C8DBC" class="header"></li>

            <li class="treeview">
              <a href="general.php">
              <i style="color:black" class="fa fa-briefcase"></i> 
              <span style="color:black">Información General</span>
              </a>
              </li>
              </a>
            </li>  

            <li class="treeview">
              <a href="https://mail.google.com/mail/u/0/#inbox">
              <i style="color:black" class="fa fa-envelope"></i> 
              <span style="color:black">Bandeja de entrada</span>
              </a>
              </li>
              </a>
            </li>  


            
            <li class="treeview">
              <a href="https://keep.google.com/">
              <i style="color:black" class="fa fa-tasks"></i> 
              <span style="color:black">Tareas</span>
              </a>
              </li>
              </a>
            </li>  


            <li class="treeview">
              <a href="indexEstadisticas.php">
              <i style="color:black" class="fa fa-area-chart"></i> 
              <span style="color:black">Estadisticas</span>
              </a>
              </li>
              </a>
            </li>  

            <li class="treeview">
              <a href="#">
                <i style="color:black" class="fa fa-laptop"></i>
                <span style="color:black">Almacén</span>
                <i style="color:black" class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="prenda.php"><i class="fa fa-circle-o"></i> Prendas</a></li>
                <li><a href="categoria.php"><i class="fa fa-circle-o"></i> Categorías</a></li>
              </ul>
            </li>
            
            <li class="treeview">
              <a href="#">
                <i style="color:black" class="fa fa-th"></i>
                <span style="color:black">Compras</span>
                 <i style="color:black" class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="https://mail.google.com/mail/u/0/#inbox"><i class="fa fa-circle-o"></i> Detalle de Factura</a></li>
                <li><a href="proveedor.php"><i class="fa fa-circle-o"></i> Proveedores</a></li>
              </ul>
            </li>
            <li class="treeview">
                              
            <li class="treeview">
              <a href="#">
                <i style="color:black" class="fa fa-folder"></i> <span style="color:black">Acceso</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="empleado.php"><i class="fa fa-circle-o"></i> Empleados</a></li>
                <li><a href="cliente.php"><i class="fa fa-circle-o"></i> Clientes</a></li>
                
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i style="color:black" class="fa fa-bar-chart"></i> <span style="color:black">Consultas</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="mediopago.php"><i class="fa fa-circle-o"></i>Medios de pago</a></li>                
              </ul>
            </li>
             

          <li class="treeview">
              <a href="google-calendar.html">
              <i style="color:black" class="fa fa-calendar-o"></i> 
              <span style="color:black">Calendario</span>
              </a>
              </li>
              </a>
            </li>  
  

            <li class="treeview">
              <a href="vistas.php">
              <i style="color:black" class="fa fa-calendar-o"></i> 
              <span style="color:black">Vistas</span>
              </a>
              </li>
              </a>
            </li>  

            </ul>
</body>
<script>
  function initFreshChat() {
    window.fcWidget.init({
      token: "cd3f5466-8721-4bb5-ae74-f90e9a1e755c",
      host: "https://wchat.freshchat.com"
    });
  }
  function initialize(i,t){var e;i.getElementById(t)?initFreshChat():((e=i.createElement("script")).id=t,e.async=!0,e.src="https://wchat.freshchat.com/js/widget.js",e.onload=initFreshChat,i.head.appendChild(e))}function initiateCall(){initialize(document,"freshchat-js-sdk")}window.addEventListener?window.addEventListener("load",initiateCall,!1):window.attachEvent("load",initiateCall,!1);
</script>
        </section>
      </aside>
