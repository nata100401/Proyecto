<?php
    include ("../config/Conexion.php");
    class MedioPago
    {
        public function __construct()
        {

        }

        public function insertar($Nombre,$NumeroConvenio)
        {
            $sql="INSERT INTO mediopago(Nombre,NumeroConvenio,Condicion)
            VALUES ('$Nombre','$NumeroConvenio','1')";
            return ejecutarConsulta($sql);
        }

        public function editar($IdMedioPago,$Nombre,$NumeroConvenio)
        {
            $sql="UPDATE mediopago
            SET Nombre='$Nombre', NumeroConvenio='$NumeroConvenio'
            where IdMedioPago='$IdMedioPago'";
            return ejecutarConsulta($sql);
        }

        public function desactivar($IdMedioPago)
        {
            $sql="UPDATE mediopago
            SET Condicion='0'
            where IdMedioPago='$IdMedioPago'";
            return ejecutarConsulta($sql);
        }

        public function activar($IdMedioPago)
        {
            $sql="UPDATE mediopago
            SET Condicion='1'
            where IdMedioPago='$IdMedioPago'";
            return ejecutarConsulta($sql);
        }

        public function mostrar($IdMedioPago)
        {
            $sql="SELECT *
            FROM mediopago
            where IdMedioPago='$IdMedioPago'";
            return consultarUnaFila($sql);
        }
        
        public function listar()
        {
            $sql="SELECT *
            FROM mediopago";
            
            return ejecutarconsulta($sql);
        }
    } 

?>