<?php
 session_start();
 $mensaje="";
    if(isset($_POST['btnAction'])){
      switch ($_POST['btnAction']) {
          case 'Agregar':
          //valido que los campos idPrenda,Descripcion,Precio,cantidad, se agregan correctamente 
               if(is_numeric($_POST['idPrenda'])){
                  $id=$_POST['idPrenda'];
                  $mensaje.="ok id correcto".$id;
               }
               else{
                  $mensaje.="ups.. id incorrecto".$id;
               }
                    if(is_string($_POST['imagenprincipal'])){
                        $imagen=$_POST['imagenprincipal'];
                        $mensaje.="ok nombre correcto".$imagen;
                    }
                    else{
                        $mensaje.="ups.. imagen incorrecto".$imagen;
                        break;
                    }
                    if(is_string($_POST['Nombre'])){
                        $nombre=$_POST['Nombre'];
                        $mensaje.="ok nombre correcto".$nombre;
                    }
                    else{
                        $mensaje.="ups.. nombre incorrecto".$descripcion;
                        break;
                    }

                    if(is_string($_POST['Descripcion'])){
                        $descripcion=$_POST['Descripcion'];
                        $mensaje.="ok descripcion correcto".$descripcion;
                    }
                    else{
                        $mensaje.="ups.. descripcion incorrecto".$descripcion;
                        break;
                    }

                    if(is_numeric($_POST['Precio'])){
                        $precio=$_POST['Precio'];
                        $mensaje.="ok precio correcto".$precio;
                    }
                    else{
                        $mensaje.="ups.. precio incorrecto".$precio;
                        break;
                    }
                    if(is_numeric($_POST['cantidad'])){
                        $cantidad=$_POST['cantidad'];
                        $mensaje.="ok cantidad correcto".$cantidad;
                    }
                    else{
                        $mensaje.="ups.. cantidad incorrecto".$cantidad;
                        break;
                    }
              //  valido sesion 
                
              if(!isset($_SESSION['carrito'])){
                  $prenda=array(
                    'id'=> $id,
                    'imagen'=>$imagen,
                    'nombre'=>$nombre,
                    'descripcion'=>$descripcion,
                    'precio'=>$precio,
                    'cantidad'=>$cantidad
                   );
                   $_SESSION['carrito'][0]=$prenda;
                   $mensaje= "Producto Agregado al carrito";
              }
              else{
                  $idPrendas=array_column($_SESSION['carrito'],"id");

                 if(in_array($id,$idPrendas)){
                     echo"<script>alert('La prenda ya ha sido seleccionanda');</script>";  
                 } 
                 else{
                  $numPrendas=count($_SESSION['carrito']);
                  $prenda=array(
                    'id'=> $id,
                    'imagen'=>$imagen,
                    'nombre'=>$nombre,
                    'descripcion'=>$descripcion,
                    'precio'=>$precio,
                    'cantidad'=>$cantidad
                   );
                   $_SESSION['carrito'][$numPrendas]=$prenda;
                   $mensaje= "Producto Agregado al carrito";
                 }
              }

                    
                // $mensaje= print_r($_SESSION,true);
                $mensaje= "Producto Agregado al carrito";
              break;
              case "Eliminar":
                    if(is_numeric($_POST['idPrenda'])){
                        $id=$_POST['idPrenda'];
                          foreach ($_SESSION['carrito'] as $indice=>$prenda) {
                              if($prenda['id']==$id){
                                 unset($_SESSION['carrito'][$indice]);
                                //  echo "<script>alert('Elemento borrado');</script>";
                              }
                          }
                    }
                    

              break;
              case "Ver":
              break;

              


              case "Continuar" :
             
             
              break;
                }
          
         
      }
    
?> 
</html>
