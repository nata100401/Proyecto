<?php 
	include("../modelos/Prenda.php");
	$Prenda=new Prenda();
    $IdPrenda="";
    $IdCategoria="";
    $IdProveedor="";
    $Genero="";
    $Descripcion="";
    $TiempoGarantiaMes="";
    $ReferenciaPrenda="";
    $Precio="";
    $Descuento="";
    if(isset($_POST["IdPrenda"])){
        $IdPrenda=$_POST["IdPrenda"];
    }
    if(isset($_POST["IdCategoria"])){
        $IdCategoria=$_POST["IdCategoria"];
    } 
    if(isset($_POST["IdProveedor"])){
        $IdProveedor=$_POST["IdProveedor"];
    }
    if(isset($_POST["Genero"])){
        $Genero=$_POST["Genero"];
    }
    if(isset($_POST["Descripcion"])){
        $Descripcion=$_POST["Descripcion"];
    }
    if(isset($_POST["TiempoGarantiaMes"])){
        $TiempoGarantiaMes=$_POST["TiempoGarantiaMes"];
    }
    if(isset($_POST["ReferenciaPrenda"])){
        $ReferenciaPrenda=$_POST["ReferenciaPrenda"];
    }
    if(isset($_POST["Precio"])){
        $Precio=$_POST["Precio"];
    }
    if(isset($_POST["Desc"])){
        $Descuento=$_POST["Desc"];
	}
	switch ($_GET["op"]){
    case 'guardaryeditar':
		if (empty($IdPrenda)){
			$rspta=$Prenda->insertar($IdCategoria,$IdProveedor, $Genero, $Descripcion, $TiempoGarantiaMes, $ReferenciaPrenda, $Precio, $Descuento);
			echo $rspta ? "Prenda registrada" : "Intentelo Nuevamente";
		}
		else {
			$rspta=$Prenda->editar($IdPrenda,$IdCategoria,$IdProveedor,  $Genero, $Descripcion, $TiempoGarantiaMes, $ReferenciaPrenda, $Precio, $Descuento);
			echo $rspta ? "Prenda actualizada" : "Intentelo Nuevamente";
		}
	break;

	case 'desactivar':
		$rspta=$Prenda->desactivar($IdPrenda);
		echo $rspta ? "Prenda desactivada" : "Intentelo Nuevamente";
		break;
	break;

	case 'activar':
		$rspta=$Prenda->activar($IdPrenda);
		echo $rspta ? "Prenda activada" : "Intentelo Nuevamente";
		break;
	break;

	case 'mostrar':
		$rspta=$Prenda->mostrar($IdPrenda);
		echo json_encode($rspta);
		break;

	case 'listar':
		$rspta=$Prenda->listar();
		$data= Array();
		while ($reg=$rspta->fetch_object()){
			$data[]=array(
			"0"=>($reg->Condicion)?'<button class="btn btn-warning"  onclick="mostrar('.$reg->IdPrenda.')"><i class="fa fa-pencil"></i></button>'.
			' <button class="btn btn-danger" onclick="desactivar('.$reg->IdPrenda.')"><i class="fa fa-close"></i></button>':
			'<button class="btn btn-warning" onclick="mostrar('.$reg->IdPrenda.')"><i class="fa fa-pencil"></i></button>'.
			' <button class="btn btn-primary" onclick="activar('.$reg->IdPrenda.')"><i class="fa fa-check"></i></button>',
            "1"=>$reg->nomcategoria, 
            "2"=>$reg->nomproveedor, 
			"3"=>$reg->Genero,
            "4"=>$reg->Descripcion,
            "5"=>$reg->TiempoGarantiaMes,
            "6"=>$reg->ReferenciaPrenda,
            "7"=>$reg->Precio,
            "8"=>$reg->Descuento,
			"9"=>($reg->Condicion)?'<span class="label bg-green">Activado</span>':
					'<span class="label bg-red">Desactivado</span>'
			); 
		}
		$results = array(
			"sEcho"=>1,
			"iTotalRecords"=>count($data),
			"iTotalDisplayRecords"=>count($data),
			"aaData"=>$data);
		echo json_encode($results);

	break;
	case 'selectCategoria':
		$rspta = $Prenda->selectCat();
		while ($reg = $rspta->fetch_object())
		{
			echo '<option value="'. $reg->IdCategoria .'">' . $reg->Nombre .'</option>';
		}
	break;
	case 'selectProveedor':
		$rspta = $Prenda->selectProve();
		while ($reg = $rspta->fetch_object())
		{
			echo '<option value="'. $reg->IdProveedor .'">' . $reg->Nombre .'</option>';
		}
	break;
}
?>