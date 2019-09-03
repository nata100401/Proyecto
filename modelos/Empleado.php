<?php
    include ("../config/Conexion.php");
    class Empleado
    {
        public function __construct()
        {

        }

        public function insertar($Nombre,$Apellido,$Documento,$Telefono,$Rol,$Clave)
        {
            $sql="INSERT INTO empleado(Nombre,Apellido,Documento,Telefono,Rol,Clave,Condicion)
            VALUES ('$Nombre','$Apellido','$Documento','$Telefono','$Rol','$Clave','1')";
            return ejecutarConsulta($sql);
        }
        public function editar($IdEmpleado,$Nombre,$Apellido,$Documento,$Telefono,$Rol,$Clave)
        {
            $sql="UPDATE empleado
            SET Nombre='$Nombre', Apellido='$Apellido', Documento='$Documento', Telefono='$Telefono',  Rol='$Rol', Clave='$Clave'
            where IdEmpleado='$IdEmpleado'";
            return ejecutarConsulta($sql);
        }

        public function desactivar($IdEmpleado)
        {
            $sql="UPDATE empleado
            SET Condicion='0'
            where IdEmpleado='$IdEmpleado'";
            return ejecutarConsulta($sql);
        }

        public function activar($IdEmpleado)
        {
            $sql="UPDATE empleado
            SET Condicion='1'
            where IdEmpleado='$IdEmpleado'";
            return ejecutarConsulta($sql);
        }

        public function mostrar($IdEmpleado)
        {
            $sql="SELECT *
            FROM empleado
            where IdEmpleado='$IdEmpleado'";
            return consultarUnaFila($sql);
        }
        
        public function listar()
        {
            $sql="SELECT *
            FROM empleado";
            
            return ejecutarconsulta($sql);
        } 
    } 
?>