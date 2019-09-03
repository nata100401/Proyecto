<?php 
    include ("../config/Conexion.php");
    Class Color
    {
        //Definimos el constructor vacio
        public function __construct()
        {

        }

        //Método para insertar registros
        public function insertar($Imagen)
        {
            $sql="INSERT INTO color(Imagen)
            VALUES ('$Imagen')";
            return ejecutarConsulta($sql);
        }
        //Método para editar registros
	public function editar($IdColor, $Imagen)
	{
		$sql="UPDATE color SET Imagen='$Imagen' WHERE IdColor='$IdColor'";
		return ejecutarConsulta($sql);
	}

	//Método para mostrar los datos de un registro a modificar
	public function mostrar($IdColor)
	{
		$sql="SELECT * FROM color WHERE IdColor='$IdColor'";
		return consultarUnaFila($sql);
	}

	//Método para listar los registros
	public function listar()
    {
        $sql="SELECT *
        FROM color";
        
        return ejecutarconsulta($sql);
    }
    }
?>