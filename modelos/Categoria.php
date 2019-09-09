<?php
include ("../config/Conexion.php");
Class Categoria
{
    public function __construct()
    {

    }
    public function insertar($Nombre)
    {
        $sql="INSERT INTO categoria (Nombre)
        VALUES ('$Nombre')";
        return ejecutarConsulta($sql);
    }

    public function editar($IdCategoria, $Nombre)
    { 
        $sql="UPDATE categoria
        SET Nombre='$Nombre'
        WHERE IdCategoria='$IdCategoria'";
        return ejecutarConsulta($sql);
    }

    public function mostrar($IdCategoria)
    {
        $sql="SELECT *
        FROM categoria
        WHERE IdCategoria='$IdCategoria'";
        return consultarUnaFila($sql);
    }

    public function listar()
    {
        $sql="SELECT *
        FROM categoria";
        return ejecutarConsulta($sql);
    }
}
?>