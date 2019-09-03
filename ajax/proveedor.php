<?php 
	include("../modelos/Proveedor.php");
	$Proveedor=new Proveedor();
    $IdProveedor="";
    $IdDepartamento="";
    $IdCiudad="";
    $Nombre="";
    $Telefonos="";
    $NIT="";
    $Email="";
    if(isset($_POST["IdProveedor"])){
        $IdProveedor=$_POST["IdProveedor"];
    }
    if(isset($_POST["IdDepartamento"])){
        $IdDepartamento=$_POST["IdDepartamento"];
    }
    if(isset($_POST["IdCiudad"])){
        $IdCiudad=$_POST["IdCiudad"];
    }
    if(isset($_POST["Nombre"])){
        $Nombre=$_POST["Nombre"];
    }
    if(isset($_POST["Telefonos"])){
        $Telefonos=$_POST["Telefonos"];
    }
    if(isset($_POST["NIT"])){
        $NIT=$_POST["NIT"];
    }
    if(isset($_POST["Email"])){
        $Email=$_POST["Email"];
    }
	switch ($_GET["op"]){
	case 'guardaryeditar':
		if (empty($IdProveedor)){
			$rspta=$Proveedor->insertar($IdDepartamento,$IdCiudad, $Nombre, $Telefonos, $NIT, $Email);
			echo $rspta ? "Proveedor registrado" : "Intentelo Nuevamente";
		}
		else {
			$rspta=$Proveedor->editar($IdProveedor,$IdDepartamento,$IdCiudad, $Nombre, $Telefonos, $NIT, $Email);
			echo $rspta ? "Proveedor actualizado" : "Intentelo Nuevamente";
		}
	break;

	case 'mostrar':
		$rspta=$Proveedor->mostrar($IdProveedor);
		echo json_encode($rspta);
		break;

	case 'listar':
		$rspta=$Proveedor->listar();
		$data= Array();
		while ($reg=$rspta->fetch_object()){
			$data[]=array(
			"0"=>'<button class="btn btn-warning" onclick="mostrar('.$reg->IdProveedor.')"><i class="fa fa-pencil"></i></button>',
            "1"=>$reg->Nombre,
            "2"=>$reg->nomdepto,
            "3"=>$reg->nomciudad,
            "4"=>$reg->Telefonos,
            "5"=>$reg->NIT,
            "6"=>$reg->Email
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
	switch ($_POST["op"]){
		case 'selectDepartamento':

		$rspta = $Proveedor->selectDep();
		while ($reg = $rspta->fetch_object())
		{
			echo '<option value="'. $reg->IdDepartamento .'">' . $reg->Nombre .'</option>';
		}
		break;

		case 'selectCiudad':
		$depa=$_POST["depar"];
		$resconsulta=$Proveedor->selectCiu($depa);
		while($datos=$resconsulta->fetch_object())
		{
		echo '<option value="'. $datos->IdCiudad .'">' . $datos->Nombre .'</option>';
		}
		break;
	}

?>