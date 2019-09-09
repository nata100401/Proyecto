<?php 
	include("../modelos/Foto.php");
	$Foto=new Foto();
	$IdFoto="";
	$IdPrenda="";
    $IdCategoria="";
    $imagen="";
    if(isset($_POST["IdFoto"])){
        $IdFoto=$_POST["IdFoto"];
	}
	if(isset($_POST["IdPrenda"])){
        $IdPrenda=$_POST["IdPrenda"];
    }
    if(isset($_POST["IdCategoria"])){
        $IdCategoria=$_POST["IdCategoria"];
    }
    if(isset($_POST["imagen"])){
        $imagen=$_POST["imagen"];
    }

	switch ($_GET["op"]){
	case 'guardaryeditar':
		//Si no existe o no ha sido cargado la imagen dentro del input de tipo "file" en la interfaz
		if (!file_exists($_FILES['imagen']['tmp_name']) || !is_uploaded_file($_FILES['imagen']['tmp_name']))
		{
			$imagen=$_POST["imagenactual"];
		}
		else 
		{
		//explode: obtiene la extensión del archivo
		$ext = explode(".", $_FILES["imagen"]["name"]);
		//Valida que el archivo cargado cumpla con las extencisones: jpg,jpeg,png
		if ($_FILES['imagen']['type'] == "image/jpg" || $_FILES['imagen']['type'] == "image/jpeg" || $_FILES['imagen']['type'] == "image/png")
		{
			//microtime: renombra el archivo con un formato de tiempo para que no tener archivos repetidos
			$imagen = round(microtime(true)) . '.' . end($ext);
			//move_uploaded_file: copia el archivo de la ubicacion local y lo mueve a la carpeta del proyecto
			move_uploaded_file($_FILES["imagen"]["tmp_name"], "....//files/articulos/" . $imagen);
		}
		}
		if (empty($IdFoto)){
			$rspta=$Foto->insertar($IdPrenda, $IdCategoria, $imagen);
			echo $rspta ? "Foto registrada" : "Foto no se pudo registrar";
		}
		else {
			$rspta=$articulo->editar($IdFoto,$IdPrenda, $IdCategoria, $imagen);
			echo $rspta ? "Foto actualizada" : "Foto no se pudo actualizar";
		}
	break;

	case 'mostrar':
		$rspta=$Foto->mostrar($IdFoto);
		//Codificar el resultado utilizando json_encode(array)
		echo json_encode($rspta);
		break;

	case 'listar':
		$rspta=$Foto->listar();
		//Definir un array
		$data= Array();
		while ($reg=$rspta->fetch_object()){
			$data[]=array(
			"0"=>'<button class="btn btn-warning" onclick="mostrar('.$reg->IdFoto.')"><i class="fa fa-pencil"></i></button>',
			"1"=>$reg->nomprenda,
			"2"=>$reg->nomcategoria,
			//Muestra en una etiqueta img la imagen
			"3"=>"<img src='../files/articulos/".$reg->imagen."' height='50px' width='50px' >"
			//Muestra la palabra Activado o Desactivado con color para que sea más claro
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
	
	case 'selectPrenda':
		$rspta = $Foto->selectPren();
		while ($reg = $rspta->fetch_object())
		{
			echo '<option value="'. $reg->IdPrenda .'">' . $reg->Descripcion .'</option>';
		}
    break; 
    
    case 'selectCategoria':
		$rspta = $Foto->selectCat();
		while ($reg = $rspta->fetch_object())
		{
			echo '<option value="'. $reg->IdCategoria .'">' . $reg->Nombre .'</option>';
		}
	break;
    }
    

?>