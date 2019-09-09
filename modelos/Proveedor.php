<?php 
    include ("../config/Conexion.php");
    Class Proveedor
    {
        public function __construct()
        {

        }

        public function insertar($IdDepartamento,$IdCiudad, $Nombre, $Telefonos, $NIT, $Email)
        {
            $sql="INSERT INTO proveedor(IdDepartamento, IdCiudad, Nombre, Telefonos, NIT, Email)
            VALUES ('$IdDepartamento', '$IdCiudad', '$Nombre', '$Telefonos', '$NIT', '$Email')";
            return ejecutarConsulta($sql);
        }
	public function editar($IdProveedor,$IdDepartamento, $IdCiudad, $Nombre, $Telefonos, $NIT, $Email)
	{
		$sql="UPDATE proveedor SET IdDepartamento='$IdDepartamento',IdCiudad='$IdCiudad',Nombre='$Nombre',Telefonos='$Telefonos',NIT='$NIT',Email='$Email' WHERE IdProveedor='$IdProveedor'";
		return ejecutarConsulta($sql);
	} 

	public function mostrar($IdProveedor)
    {
        $sql="SELECT * FROM proveedor
        WHERE IdProveedor='$IdProveedor'";
        return consultarUnaFila($sql);
    }

    public function listar()
	{ 
		$sql="SELECT d.Nombre as nomdepto,c.Nombre as nomciudad, p.Nombre,p.Telefonos,p.NIT,p.Email
        FROM departamento d, proveedor p, ciudad c
        WHERE d.IdDepartamento=p.IdDepartamento AND c.IdCiudad=p.IdCiudad";
		return ejecutarConsulta($sql);		
	}
	public function selectDep()
	{
	    $sql="SELECT *
        FROM departamento ORDER BY nombre";
	    return ejecutarConsulta($sql);		
    }

	public function selectCiu($IdDepa)
	{
	    $sql="SELECT * 
        FROM ciudad 
        WHERE IdDepartamento= '$IdDepa'
        ORDER BY nombre";
	return ejecutarConsulta($sql);		
    }
}
?>	
    