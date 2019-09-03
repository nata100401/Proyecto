<?php
include("../modelos/Foto.php");
$Foto=new Foto();
$IdFoto="";
$IdPrenda="";
$IdCategoria=""
$Imagen="";
if(isset($_POST["IdFoto"])){
    $IdFoto=$_POST["IdFoto"];
}
if(isset($_POST["IdPrenda"])){
    $IdPrenda=$_POST["IdPrenda"];
}
if(isset($_POST["IdCategoria"])){
    $IdCategoria=$_POST["IdCategoria"];
}
if(isset($_POST["Imagen"])){
    $Imagen=$_POST["Imagen"];
}

switch ($_GET["op"]){
    case 'guardaryeditar':

    if (!file_exists($_FILES['imagen']['tmp_name']) || !is_uploaded_file($_FILES['imagen']['tmp_name']))
    {
        $imagen=$_POST["imagenactual"];
    }
    else 
    {
    $ext = explode(".", $_FILES["imagen"]["name"]);
    if ($_FILES['imagen']['type'] == "image/jpg" || $_FILES['imagen']['type'] == "image/jpeg" || $_FILES['imagen']['type'] == "image/png")
    {
        $imagen = round(microtime(true)) . '.' . end($ext);
        move_uploaded_file($_FILES["Imagen"]["tmp_name"], "../files/colores/" . $imagen);
    }
}

    if (empty($IdFoto)){
        $rspta=$Foto->insertar($Imagen);
        echo $rspta ? "Foto Registrada" : "No se agrego. Intentelo Nuevamente";
    }
    else{
        $rspta=$Foto->editar($IdFoto, $IdPrenda, $IdCategoria,$Imagen);
        echo $rspta ? "Foto Actualizada" : "No se actualizo. Intentelo Nuevamente";
    }
    break;

    case 'mostrar':
        $rspta=$Foto->mostrar($IdFoto);
        echo json_encode($rspta);
        break;

    case 'listar':
        $rspta=$Foto->listar();

        $data = Array();

        while ($reg=$rspta->fetch_object()) {
            $data[]=array(
                "0"=>'<button class="btn btn-warning" onclick="mostrar('.$reg->IdFoto.')"><i class="fa fa-pencil"></i></button>',
                "1"=>"<img src='../files/fotos/".$reg->Imagen."' height='50px' width='50px' >", 
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