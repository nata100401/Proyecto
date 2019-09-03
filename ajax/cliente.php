<?php
include("../modelos/Cliente.php");
$Cliente=new Cliente();
$IdCliente="";
$Nombre="";
$Apellido="";
$Telefono="";
$Email="";
$Documento="";
$Direccion="";
$Clave="";
if(isset($_POST["IdCliente"])){
    $IdCliente=$_POST["IdCliente"];
}
if(isset($_POST["Nombre"])){
    $Nombre=$_POST["Nombre"];
}
if(isset($_POST["Apellido"])){
    $Apellido=$_POST["Apellido"];
}
if(isset($_POST["Telefono"])){
    $Telefono=$_POST["Telefono"];
}
if(isset($_POST["Email"])){
    $Email=$_POST["Email"];
}
if(isset($_POST["Documento"])){
    $Documento=$_POST["Documento"];
}
if(isset($_POST["Direccion"])){
    $Direccion=$_POST["Direccion"];
}
if(isset($_POST["Clave"])){
    $Clave=$_POST["Clave"];
}

switch ($_GET["op"]){
    case 'guardaryeditar':

    if (empty($IdCliente)){
        $rspta=$Cliente->insertar($Nombre,$Apellido,$Telefono,$Email,$Documento,$Direccion,$Clave);
        echo $rspta ? "Cliente Registrado" : "No se agrego. Intentelo Nuevamente";
    }
    else{
        $rspta=$Cliente->editar($IdCliente,$Nombre,$Apellido,$Telefono,$Email,$Documento,$Direccion,$Clave);
        echo $rspta ? "Cliente Actualizado" : "No se actualizo. Intentelo Nuevamente";
    }
    break;

    case 'mostrar':
        $rspta=$Cliente->mostrar($IdCliente);
        echo json_encode($rspta);
        break;

    case 'listar':
        $rspta=$Cliente->listar();

        $data = Array();

        while ($reg=$rspta->fetch_object()) {
            $data[]=array(
                "0"=>'<button class="btn btn-warning" onclick="mostrar('.$reg->IdCliente.')"><i class="fa fa-pencil"></i></button>',
                "1"=>$reg->Nombre,
                "2"=>$reg->Apellido,
                "3"=>$reg->Telefono,
                "4"=>$reg->Email,
                "5"=>$reg->Documento,
                "6"=>$reg->Direccion,
                "7"=>$reg->Clave
            );
        }
        $results = array(
            "sEcho"=>1,
            "iTotalRecords"=>count($data),
            "iTotalDisplayRecords"=>count($data),
            "aaData"=>$data);

            echo json_encode($results);

    break;
}
?>