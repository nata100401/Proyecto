<?php 
    include ("../config/Conexion.php");
    Class Prenda
    {
        public function __construct()
        {

        }

        public function insertar($IdCategoria, $IdProveedor, $Genero, $Descripcion, $TiempoGarantiaMes, $ReferenciaPrenda, $Precio, $Descuento)
        {
            $sql="INSERT INTO prenda(IdCategoria, IdProveedor, Genero, Descripcion, TiempoGarantiaMes, ReferenciaPrenda, Precio, Descuento, Condicion)
            VALUES ('$IdCategoria', '$IdProveedor', '$Genero', '$Descripcion', '$TiempoGarantiaMes', '$ReferenciaPrenda','$Precio','$Descuento','1')";
            return ejecutarConsulta($sql);
        }
	public function editar($IdPrenda,$IdCategoria, $IdProveedor, $Genero, $Descripcion, $TiempoGarantiaMes, $ReferenciaPrenda, $Precio, $Descuento)
	{
		$sql="UPDATE prenda SET IdCategoria='$IdCategoria',IdProveedor='$IdProveedor',Genero='$Genero',Descripcion='$Descripcion',TiempoGarantiaMes='$TiempoGarantiaMes',ReferenciaPrenda='$ReferenciaPrenda',Precio='$Precio',Descuento='$Descuento'
		WHERE IdPrenda='$IdPrenda'";
		return ejecutarConsulta($sql);
	}

	public function desactivar($IdPrenda)
	{
		$sql="UPDATE prenda SET Condicion='0' WHERE IdPrenda='$IdPrenda'";
		return ejecutarConsulta($sql);
	}

	public function activar($IdPrenda)
	{
		$sql="UPDATE prenda SET Condicion='1' WHERE IdPrenda='$IdPrenda'";
		return ejecutarConsulta($sql);
	}

	public function mostrar($IdPrenda)
	{
		$sql="SELECT * FROM prenda WHERE IdPrenda='$IdPrenda'";
		return consultarUnaFila($sql);
	}

	public function listar()
	{
		$sql="SELECT c.Nombre as nomcategoria,pr.Nombre as nomproveedor, p.IdPrenda,p.IdCategoria, p.Genero,p.Descripcion,p.TiempoGarantiaMes,p.ReferenciaPrenda,p.Precio,p.Descuento,p.Condicion
		FROM categoria c, prenda p, proveedor pr
		WHERE c.IdCategoria=p.IdCategoria AND pr.IdProveedor=p.IdProveedor";
		return ejecutarConsulta($sql);		
	}
	public function selectCat()
    {
        $sql="SELECT *
        FROM categoria ORDER BY Nombre";
        return ejecutarConsulta($sql);
	}

	public function selectProve()
    {
        $sql="SELECT *
        FROM proveedor ORDER BY Nombre";
        return ejecutarConsulta($sql);
    }
}
?>