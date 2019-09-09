<?php 
	include("../modelos/Entrada.php");
	$Entrada=new Entrada();
    $IdEntrada="";
    $IdPrenda="";
	$IdProveedor="";
	$IdColor="";
    $Cantidad="";
	$Fecha="";
	$Talla="";
    if(isset($_POST["IdEntrada"])){
        $IdEntrada=$_POST["IdEntrada"];
    }
    if(isset($_POST["IdPrenda"])){
        $IdPrenda=$_POST["IdPrenda"];
    } 
    if(isset($_POST["IdProveedor"])){
        $IdProveedor=$_POST["IdProveedor"];
    }
    if(isset($_POST["IdColor"])){
        $IdColor=$_POST["IdColor"];
	}
	if(isset($_POST["Cantidad"])){
        $Cantidad=$_POST["Cantidad"];
    }
    if(isset($_POST["Fecha"])){
        $Fecha=$_POST["Fecha"];
	}
	if(isset($_POST["Talla"])){
        $Talla=$_POST["Talla"];
	}
	switch ($_GET["op"]){
    case 'guardaryeditar':
		if (empty($IdEntrada)){
			$rspta=$Entrada->insertar($IdPrenda,$IdProveedor, $IdColor, $Cantidad, $Fecha, $Talla);
			echo $rspta ? "Entrada registrada" : "Intentelo Nuevamente";
		}
		else {
			$rspta=$Entrada->editar($IdEntrada,$IdPrenda,$IdProveedor, $IdColor, $Cantidad, $Fecha, $Talla);
			echo $rspta ? "Entrada actualizada" : "Intentelo Nuevamente";
		}
    break;
    
	case 'mostrar':
		$rspta=$Entrada->mostrar($IdEntrada);
		echo json_encode($rspta);
		break;

	case 'listar':
		$rspta=$Entrada->listar();
		$data= Array();
		while ($reg=$rspta->fetch_object()){
			$data[]=array(
			"0"=>'<button class="btn btn-warning" onclick="mostrar('.$reg->IdEntrada.')"><i class="fa fa-pencil"></i></button>',
            "1"=>$reg->nomprenda, 
			"2"=>$reg->nomproveedor, 
			"3"=>$reg->nomcolor,
			"4"=>$reg->Cantidad,
			"5"=>$reg->Fecha,
			"6"=>$reg->Talla
			); 
		}
		$results = array(
			"sEcho"=>1,
			"iTotalRecords"=>count($data),
			"iTotalDisplayRecords"=>count($data),
			"aaData"=>$data);
		echo json_encode($results);

	break;
	case 'selectPrenda':
		$rspta = $Entrada->selectPren();
		while ($reg = $rspta->fetch_object())
		{
			echo '<option value="'. $reg->IdPrenda .'">' . $reg->Descripcion .'</option>';
		}
	break;
	case 'selectProveedor':
		$rspta = $Entrada->selectProo();
		while ($reg = $rspta->fetch_object())
		{
			echo '<option value="'. $reg->IdProveedor .'">' . $reg->Nombre .'</option>';
		}
	break;
	case 'selectColorr':
		$rspta = $Entrada->selectCol();
		while ($reg = $rspta->fetch_object())
		{
			echo '<option value="'. $reg->IdColor .'">' . $reg->IdColor .'</option>';
		}
	break;
} 
?>