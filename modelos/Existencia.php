<?php 
    include ("../config/Conexion.php");
    Class Existencia
    {
        public function __construct()
        {

        }

        public function insertar($IdColor, $IdPrenda, $Numero, $Talla)
        {
            $sql="INSERT INTO existencia(IdColor, IdPrenda, Numero, Talla)
            VALUES ('$IdColor', '$IdPrenda', '$Numero', '$Talla')";
            return ejecutarConsulta($sql);
        }

	public function editar($IdExistencia,$IdColor, $IdPrenda, $Numero, $Talla)
	{
		$sql="UPDATE existencia SET IdColor='$IdColor',IdPrenda='$IdPrenda',Numero='$Numero',Talla='$Talla'
		WHERE IdExistencia='$IdExistencia'";
		return ejecutarConsulta($sql);
	}

	public function mostrar($IdExistencia)
	{
		$sql="SELECT * FROM existencia WHERE IdExistencia='$IdExistencia'";
		return consultarUnaFila($sql);
	}
 
	public function listar()
	{
		$sql="SELECT c.IdColor as nomcolor,pr.Descripcion as nomprenda, e.IdExistencia,e.IdColor, e.Numero,e.Talla
		FROM color c, existencia e, prenda pr
		WHERE c.IdColor=e.IdColor AND pr.IdPrenda=e.IdPrenda";
		return ejecutarConsulta($sql);		
	}
	public function selectCo()
    {
        $sql="SELECT *
        FROM color";
        return ejecutarConsulta($sql);
	}

	public function selectPre()
    {
        $sql="SELECT *
        FROM prenda ORDER BY Descripcion";
        return ejecutarConsulta($sql);
    }
}
?>