<?php 
	include("../modelos/Existencia.php");
	$Existencia=new Existencia();
    $IdExistencia="";
    $IdColor="";
    $IdPrenda="";
    $Numero="";
    $Talla="";
    if(isset($_POST["IdExistencia"])){
        $IdExistencia=$_POST["IdExistencia"];
    }
    if(isset($_POST["IdColor"])){
        $IdColor=$_POST["IdColor"];
    } 
    if(isset($_POST["IdPrenda"])){
        $IdPrenda=$_POST["IdPrenda"];
    }
    if(isset($_POST["Numero"])){
        $Numero=$_POST["Numero"];
    }
    if(isset($_POST["Talla"])){
        $Talla=$_POST["Talla"];
    }
	switch ($_GET["op"]){
    case 'guardaryeditar':
		if (empty($IdExistencia)){
			$rspta=$Existencia->insertar($IdColor,$IdPrenda, $Numero, $Talla);
			echo $rspta ? "Existencia registrada" : "Intentelo Nuevamente";
		}
		else {
			$rspta=$Existencia->editar($IdExistencia,$IdColor,$IdPrenda, $Numero, $Talla);
			echo $rspta ? "Existencia actualizada" : "Intentelo Nuevamente";
		}
    break;
    
	case 'mostrar':
		$rspta=$Existencia->mostrar($IdExistencia);
		echo json_encode($rspta);
		break;

	case 'listar':
		$rspta=$Existencia->listar();
		$data= Array();
		while ($reg=$rspta->fetch_object()){
			$data[]=array(
			"0"=>'<button class="btn btn-warning" onclick="mostrar('.$reg->IdExistencia.')"><i class="fa fa-pencil"></i></button>',
            "1"=>$reg->nomcolor, 
            "2"=>$reg->nomprenda, 
			"3"=>$reg->Numero,
            "4"=>$reg->Talla
			); 
		}
		$results = array(
			"sEcho"=>1,
			"iTotalRecords"=>count($data),
			"iTotalDisplayRecords"=>count($data),
			"aaData"=>$data);
		echo json_encode($results);

	break;
	case 'selectColor':
		$rspta = $Existencia->selectCo();
		while ($reg = $rspta->fetch_object())
		{
			echo '<option value="'. $reg->IdColor .'">' . $reg->IdColor .'</option>';
		}
	break;
	case 'selectPrenda':
		$rspta = $Existencia->selectPre();
		while ($reg = $rspta->fetch_object())
		{
			echo '<option value="'. $reg->IdPrenda .'">' . $reg->Descripcion .'</option>';
		}
	break;
} 
?>