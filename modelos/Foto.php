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
        public function insertar($IdPrenda, $IdCategoria, $imagen)
        {
            $sql="INSERT INTO foto(IdPrenda, IdCategoria, imagen)
            VALUES ('$IdPrenda', '$IdCategoria', '$imagen')";
            return ejecutarConsulta($sql);
        }
        //Método para editar registros
	public function editar($IdFoto,$IdPrenda, $IdCategoria, $imagen)
	{
		$sql="UPDATE foto SET IdPrenda='$IdPrenda',IdCategoria='$IdCategoria',imagen='$imagen' WHERE IdFoto='$IdFoto'";
		return ejecutarConsulta($sql);
	}

	//Método para mostrar los datos de un registro a modificar
	public function mostrar($IdFoto)
	{
		$sql="SELECT * FROM foto WHERE IdFoto='$IdFoto'";
		return consultarUnaFila($sql);
	}

	//Método para listar los registros
	public function listar()
	{
		$sql="SELECT p.Descripcion as nomprenda,c.Nombre as nomcategoria, f.IdFoto,f.IdPrenda, f.IdCategoria,f.Imagen
		FROM prenda p, foto f, categoria c
            WHERE p.IdPrenda=f.IdPrenda AND c.IdCategoria=f.IdCategoria";
		return ejecutarConsulta($sql);		
    }

    public function selectPren()
    {
        $sql="SELECT *
        FROM prenda ORDER BY Descripcion";
        return ejecutarConsulta($sql);
    }
    
    public function selectCat()
    {
        $sql="SELECT *
        FROM categoria ORDER BY Nombre";
        return ejecutarConsulta($sql);
	}

	
    }
?>