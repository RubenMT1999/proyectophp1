<?php

    require "ClaseConexion.php";

    class DevuelveClientes extends ClaseConexion{


        public function __construct(){
            parent::__construct();
        }



        public function getClientes(): array {
            $sql = "select * from clientes";

            $sentencia= $this->conexion_db->prepare($sql);

            $sentencia->execute(array());

            $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);

            $sentencia->closeCursor();

            return $resultado;

            $this->conexion_db=null;
        }





        // esto con mysqli

//        public function getClientes(): array {
//            $resultado=$this->conexion_db->query('select * from clientes');
//
//            $productos=$resultado->fetch_all(MYSQLI_ASSOC);
//
//            return $productos;
//        }

    }

?>