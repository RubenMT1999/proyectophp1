<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

    class Coche{

        private $ruedas;
        var $color;
        var $motor;
        //private static $ayuda=4500; no podemos usar this con el static porque no
        //pertenece a ningun objeto, pues pertenece a la clase.
        //para hacer referencia a un campo estático usamos self::$ayuda

        public function __construct(){
            $this->ruedas =4;
            $this->color="";
            $this->motor=1600;
        }



        function arrancar(){
            echo "Estoy arrancando";
        }

        function girar(){
            echo "Estoy girando";
        }

        function frenar(){
            echo "Estoy frenando";
        }

        /**
         * @return int
         */
        public function getRuedas()
        {
            return $this->ruedas;
        }

        /**
         * @param int $ruedas
         */
        public function setRuedas($ruedas)
        {
            $this->ruedas = $ruedas;
        }

        /**
         * @return string
         */
        public function getColor()
        {
            return $this->color;
        }

        /**
         * @param string $color
         */
        public function setColor($color)
        {
            $this->color = $color;
        }

        /**
         * @return int
         */
        public function getMotor()
        {
            return $this->motor;
        }

        /**
         * @param int $motor
         */
        public function setMotor($motor)
        {
            $this->motor = $motor;
        }

    }

    $renault=new Coche();
    $renault->girar();
    echo ($renault->getRuedas());

?>
</body>
</html>
