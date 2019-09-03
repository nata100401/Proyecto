<?php
include ("../config/Conexion.php");
Class Cliente
{
    public function __construct()
    {

    }
    public function insertar($Nombre, $Apellido,$Telefono,$Email,$Documento,$Direccion,$Clave)
    {
        $sql="INSERT INTO cliente (Nombre, Apellido, Telefono, Email, Documento, Direccion, Clave)
        VALUES ('$Nombre','$Apellido','$Telefono','$Email', '$Documento', '$Direccion', '$Clave')";
        return ejecutarConsulta($sql);
    }

    public function editar($IdCliente, $Nombre, $Apellido,$Telefono,$Email,$Documento,$Direccion,$Clave)
    {
        $sql="UPDATE cliente
        SET Nombre='$Nombre', Apellido='$Apellido', Telefono='$Telefono', Email='$Email', Documento='$Documento', Direccion='$Direccion',Clave='$Clave'
        WHERE IdCliente='$IdCliente'";
        return ejecutarConsulta($sql);
    }

    public function mostrar($IdCliente)
    {
        $sql="SELECT *
        FROM cliente
        WHERE IdCliente='$IdCliente'";
        return consultarUnaFila($sql);
    }

    public function listar()
    {
        $sql="SELECT*
        FROM cliente";

        return ejecutarConsulta($sql);
    }
}
?>