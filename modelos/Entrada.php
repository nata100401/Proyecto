<?php 
    include ("../config/Conexion.php");
    Class Entrada
    {
        public function __construct()
        {

        }

        public function insertar($IdPrenda, $IdProveedor, $IdColor, $Cantidad, $Fecha, $Talla)
        {
            $sql="INSERT INTO entrada(IdPrenda, IdProveedor, IdColor, Cantidad, Fecha, Talla)
            VALUES ('$IdPrenda', '$IdProveedor', '$IdColor', '$Cantidad', '$Fecha', '$Talla')";
            return ejecutarConsulta($sql);
        }

	public function editar($IdEntrada, $IdPrenda, $IdProveedor, $IdColor, $Cantidad, $Fecha, $Talla)
	{
		$sql="UPDATE entrada SET IdPrenda='$IdPrenda',IdProveedor='$IdProveedor',IdColor='$IdColor',Cantidad='$Cantidad', Fecha='$Fecha', Talla='$Talla'
		WHERE IdEntrada='$IdEntrada'";
		return ejecutarConsulta($sql);
	}

	public function mostrar($IdEntrada)
	{
		$sql="SELECT * FROM entrada WHERE IdEntrada='$IdEntrada'";
		return consultarUnaFila($sql);
	}
 
	public function listar()
	{
		$sql="SELECT pr.Descripcion as nomprenda,p.Nombre as nomproveedor, c.IdColor as nomcolor, e.IdEntrada,e.IdPrenda, e.IdProveedor,e.IdColor, e.Cantidad, e.Fecha, e.Talla
		FROM prenda pr, entrada e, proveedor p, color c
		WHERE pr.IdPrenda=e.IdPrenda AND c.IdColor=e.IdColor AND  p.IdProveedor=pr.IdProveedor";
		return ejecutarConsulta($sql);		
	}
	public function selectPren()
    {
        $sql="SELECT *
        FROM prenda ORDER BY Descripcion";
        return ejecutarConsulta($sql);
	}

	public function selectProo()
    {
        $sql="SELECT *
        FROM proveedor ORDER BY Nombre";
        return ejecutarConsulta($sql);
    }

    public function selectCol()
    {
        $sql="SELECT *
        FROM color";
        return ejecutarConsulta($sql);
    }
}
?>