<?php
include("../modelos/Categoria.php");
$Categoria=new Categoria();
$IdCategoria="";
$Nombre="";
if(isset($_POST["IdCategoria"])){
    $IdCategoria=$_POST["IdCategoria"];
}
if(isset($_POST["Nombre"])){
    $Nombre=$_POST["Nombre"];
}

switch ($_GET["op"]){
    case 'guardaryeditar':

    if (empty($IdCategoria)){
        $rspta=$Categoria->insertar($Nombre);
        echo $rspta ? "Categoria Registrada" : "No se agrego. Intentelo Nuevamente";
    }
    else{
        $rspta=$Categoria->editar($IdCategoria,$Nombre);
        echo $rspta ? "Categoria Actualizada" : "No se actualizo. Intentelo Nuevamente";
    }
    break;

    case 'mostrar':
        $rspta=$Categoria->mostrar($IdCategoria);
        echo json_encode($rspta);
        break;

    case 'listar':
        $rspta=$Categoria->listar();

        $data = Array();

        while ($reg=$rspta->fetch_object()) {
            $data[]=array(
                "0"=>'<button class="btn btn-warning" onclick="mostrar('.$reg->IdCategoria.')"><i class="fa fa-pencil"></i></button>',
                "1"=>$reg->Nombre
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