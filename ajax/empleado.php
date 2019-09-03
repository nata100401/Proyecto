<?php
 include("../modelos/Empleado.php");
 $Empleado= new Empleado();
 $IdEmpleado="";
 $Nombre="";
 $Apellido="";
 $Documento="";
 $Telefono="";
 $Rol="";
 $Clave="";
   if (isset($_POST["IdEmpleado"])) {

       $IdEmpleado=$_POST["IdEmpleado"];
   }
  if (isset($_POST["Nombre"])) {

    $Nombre=$_POST["Nombre"];
}

if (isset($_POST["Apellido"])) {

    $Apellido=$_POST["Apellido"];
}

if (isset($_POST["Documento"])) {

    $Documento=$_POST["Documento"];
}

if (isset($_POST["Telefono"])) {

    $Telefono=$_POST["Telefono"];
}

if (isset($_POST["Rol"])) {

    $Rol=$_POST["Rol"];
}

if (isset($_POST["Clave"])) {

    $Clave=$_POST["Clave"];
}

switch ($_GET["op"]) {
    case 'guardaryeditar':
         if (empty($IdEmpleado)) {
             $rspta=$Empleado->insertar($Nombre,$Apellido,$Documento,$Telefono,$Rol,$Clave);
             echo $rspta ? "Empleado registrado" : "Intentelo Nuevamente";
         }
         else {
            $rspta=$Empleado->editar($IdEmpleado,$Nombre,$Apellido,$Documento,$Telefono,$Rol,$Clave);
            echo $rspta ? "Empleado actualizado" : "Intentelo Nuevamente";
         }
        break;

        case 'desactivar':
            $rspta=$Empleado->desactivar($IdEmpleado);
            echo $rspta ? "Empleado Desactivado" : "Intentelo Nuevamente";
            break;
        break;

        case 'activar':
            $rspta=$Empleado->activar($IdEmpleado);
            echo $rspta ? "Empleado activado" : "Intentelo Nuevamente";
            break;
        break;

        case 'mostrar':
            $rspta=$Empleado->mostrar($IdEmpleado);
            echo json_encode($rspta);
            break;
        break;

        case 'listar':
            $rspta=$Empleado->listar();
            $data=Array();
            while ($reg=$rspta->fetch_object()) {
                $data[]=array(
                    "0"=>($reg->Condicion)?'<button class="btn btn-warning" onclick="mostrar('.$reg->IdEmpleado.')"><i class="fa fa-pencil"></i></button>'.
                    '<button class="btn btn-danger" onclick="desactivar('.$reg->IdEmpleado.')"><i class="fa fa-close"></i></button>':
                    '<button class="btn btn-warning" onclick="mostrar('.$reg->IdEmpleado.')"><i class="fa fa-pencil"></i></button>'.
                    '<button class="btn btn-primary" onclick="activar('.$reg->IdEmpleado.')"><i class="fa fa-check"></i></button>',
                    "1"=>$reg->Nombre,
                    "2"=>$reg->Apellido, 
                    "3"=>$reg->Documento,
                    "4"=>$reg->Telefono, 
                    "5"=>$reg->Rol,
                    "6"=>$reg->Clave, 
                    "7"=>($reg->Condicion)            
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