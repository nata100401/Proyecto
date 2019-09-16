<?php 
	include("../modelos/Color.php");
	$color=new Color();
	$IdColor="";
	$Nombre=""; 
    $Imagen="";
    if(isset($_POST["IdColor"])){
        $IdColor=$_POST["IdColor"];
	}
	if(isset($_POST["Nombre"])){
        $Nombre=$_POST["Nombre"];
    }
    if(isset($_POST["Imagen"])){
        $Imagen=$_POST["Imagen"];
    }
	switch ($_GET["op"]){
	case 'guardaryeditar':
	
		if (isset($_POST["Nombre"])) {

			$Nombre=$_POST["Nombre"];
		}

		if (!file_exists($_FILES['Imagen']['tmp_name']) || !is_uploaded_file($_FILES['Imagen']['tmp_name']))
		{
			$imagen=$_POST["imagenactual"];
		}
		else 
		{
		$ext = explode(".", $_FILES["Imagen"]["name"]);
		if ($_FILES['Imagen']['type'] == "image/jpg" || $_FILES['imagen']['type'] == "image/jpeg" || $_FILES['imagen']['type'] == "image/png")
		{
			$Imagen = round(microtime(true)) . '.' . end($ext);
			move_uploaded_file($_FILES["Imagen"]["tmp_name"], "../../files/colores/" . $Imagen);
		}
		}
		if (empty($IdColor)){
			$rspta=$color->insertar($Nombre,$Imagen);
			echo $rspta ? "Color registrado" : "Color no se pudo registrar";
		}
		else {
			$rspta=$color->editar($IdColor,$Nombre, $Imagen);
			echo $rspta ? "Color actualizado" : "Color no se pudo actualizar";
		}
    break;
    
	case 'mostrar':
		$rspta=$color->mostrar($IdColor);
		echo json_encode($rspta);
		break;
  
	case 'listar':
		$rspta=$color->listar();
		//Definir un array
		$data= Array();
		while ($reg=$rspta->fetch_object()){
			$data[]=array(
			"0"=>'<button class="btn btn-warning" onclick="mostrar('.$reg->IdColor.')"><i class="fa fa-pencil"></i></button>',
			"1"=>$reg->Nombre,
			"2"=>"<img src='../files/colores/".$reg->Imagen."' height='50px' width='50px' >"
			);
		}
		$results = array(
			"sEcho"=>1, //Mostrar desde la fila 1
			"iTotalRecords"=>count($data), //Total registros de la tabla
			"iTotalDisplayRecords"=>count($data), //Total registros a visualizar en pantalla
			"aaData"=>$data); //En este indice del array llamado "aaData" se envia los datos del array $data
		//Retornar el array $results a través de JSON
		echo json_encode($results);

	break;
	
    }
    

?>