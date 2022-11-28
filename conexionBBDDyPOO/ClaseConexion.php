<?php

    require("conexionPOO.php");

    class ClaseConexion{

        protected $conexion_db;


        public function __construct(){
            try {
                $this->conexion_db=  new PDO('mysql:host=localhost; dbname=apispringclientes',
                                                'root','1234');

                $this->conexion_db->exec("set character set utf8");

                return $this->conexion_db;

            }catch (Exception $e){
                echo $e->getLine();
            }
        }




        //Esto seria conexion mediante mysqli


//        public function __construct(){
//            $this->conexion_db = new mysqli(DB_HOST,DB_USUARIO,DB_PASSWORD,DB_NAME);
//
//            if ($this->conexion_db->connect_errno){
//                echo "Error al conectar a la BBDD" . $this->conexion_db->connect_error;
//                return;
//            }
//
//            $this->conexion_db->set_charset(DB_CHARSET);
//        }



}

?>