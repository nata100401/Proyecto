<?php
 include("../modelos/MedioPago.php");
 $MedioPago= new MedioPago();
 $IdMedioPago="";
 $Nombre="";
 $NumeroConvenio="";
   if (isset($_POST["IdMedioPago"])) {

       $IdMedioPago=$_POST["IdMedioPago"];
   }
  if (isset($_POST["Nombre"])) {

    $Nombre=$_POST["Nombre"];
}

if (isset($_POST["NumeroConvenio"])) {

    $NumeroConvenio=$_POST["NumeroConvenio"];
}

switch ($_GET["op"]) {
    case 'guardaryeditar':
         if (empty($IdMedioPago)) {
             $rspta=$MedioPago->insertar($Nombre,$NumeroConvenio);
             echo $rspta ? "Medio de pago registrado" : "Intentelo Nuevamente";
         }
         else {
            $rspta=$MedioPago->editar($IdMedioPago,$Nombre,$NumeroConvenio);
            echo $rspta ? "Medio de pago actualizado" : "Intentelo Nuevamente";
         }
        break;

        case 'desactivar':
            $rspta=$MedioPago->desactivar($IdMedioPago);
            echo $rspta ? "Medio de pago desactivado" : "Intentelo Nuevamente";
            break;
        break;

        case 'activar':
            $rspta=$MedioPago->activar($IdMedioPago);
            echo $rspta ? "Medio de pago activado" : "Intentelo Nuevamente";
            break;
        break;

        case 'mostrar':
            $rspta=$MedioPago->mostrar($IdMedioPago);
            echo json_encode($rspta);
            break;
        break;

        case 'listar':
            $rspta=$MedioPago->listar();
            $data=Array();
            while ($reg=$rspta->fetch_object()) {
                $data[]=array(
                    "0"=>($reg->Condicion)?'<button class="btn btn-warning" onclick="mostrar('.$reg->IdMedioPago.')"><i class="fa fa-pencil"></i></button>'.
                    '<button class="btn btn-danger" onclick="desactivar('.$reg->IdMedioPago.')"><i class="fa fa-close"></i></button>':
                    '<button class="btn btn-warning" onclick="mostrar('.$reg->IdMedioPago.')"><i class="fa fa-pencil"></i></button>'.
                    '<button class="btn btn-primary" onclick="activar('.$reg->IdMedioPago.')"><i class="fa fa-check"></i></button>',
                    "1"=>$reg->Nombre,
                    "2"=>$reg->NumeroConvenio, 
                    "3"=>($reg->Condicion)            
                );
            }
           $results = array(
                "sEcho"=> 1,
                "iTotalRecords"=>count($data),
                "ITotalDisplayRecords"=>count($data),
                "aaData"=>$data
            );
            echo json_encode($results);
        break;
}
?>