<?php 
    //Hacemos referencia a la conexión con la base de datos
    include ("../config/Conexion.php");
    //Definimos la clase: Articulo
    Class Foto
    {
        //Definimos el constructor vacio
        public function __construct()
        {

        }

        //Método para insertar registros
        public function insertar($IdExistencia, $imagen)
        {
            $sql="INSERT INTO foto(IdExistencia, imagen)
            VALUES ('$IdExistencia', '$imagen')";
            return ejecutarConsulta($sql);
        }
        //Método para editar registros
	public function editar($IdFoto,$IdExistencia, $imagen)
	{
		$sql="UPDATE foto SET IdExistencia='$IdExistencia',imagen='$imagen' WHERE IdFoto='$IdFoto'";
		return ejecutarConsulta($sql);
	}

	//Método para mostrar los datos de un registro a modificar
	public function mostrar($IdFoto)
	{
		$sql="SELECT * FROM dbmultimarcas.foto WHERE IdFoto='$IdFoto'";
		return consultarUnaFila($sql);
	}

	//Método para listar los registros
	public function listar()
	{
		$sql="SELECT e.Numero as nomex, f.IdFoto,f.IdExistencia,f.Imagen
		FROM dbmultimarcas.existencia e, dbmultimarcas.foto f
            WHERE e.IdExistencia=f.IdExistencia";
		return ejecutarConsulta($sql);		
    }

    public function selectEx()
    {
        $sql="SELECT *
        FROM dbmultimarcas.existencia";
        return ejecutarConsulta($sql);
    }
    

	
    }
?>