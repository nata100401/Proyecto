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