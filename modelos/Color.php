<?php 
    include ("../config/Conexion.php");
    Class Color
    {
        //Definimos el constructor vacio
        public function __construct()
        {

        }

        //Método para insertar registros
        public function insertar($Nombre, $Imagen)
        {
            $sql="INSERT INTO color(Nombre,Imagen)
            VALUES ('$Nombre','$Imagen')";
            return ejecutarConsulta($sql);
        }
        //Método para editar registros
	public function editar($IdColor,$Nombre, $Imagen)
	{
		$sql="UPDATE color SET Nombre='$Nombre', Imagen='$Imagen' WHERE IdColor='$IdColor'";
		return ejecutarConsulta($sql);
	} 

	//Método para mostrar los datos de un registro a modificar
	public function mostrar($IdColor)
	{
		$sql="SELECT * FROM bdmultimarcas.color WHERE IdColor='$IdColor'";
		return consultarUnaFila($sql);
	}

	//Método para listar los registros
	public function listar()
    {
        $sql="SELECT *
        FROM bdmultimarcas.color";
        
        return ejecutarconsulta($sql);
    }
    }
?>