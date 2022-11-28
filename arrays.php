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

//    $semana[]="Lunes";
//    $semana[]="Martes";
//    $semana[]="Miercoles";

//        $semana=array("Lunes","Martes","Miercoles");
//        echo $semana[1];

        $datos=array("Nombre"=>"Rubén","Edad"=>23);
        echo $datos["Edad"];

        if (is_array($datos)){
            echo "es un array";
        }

        foreach ($datos as $clave => $valor){
            echo "A $clave le corresponde $valor <br>";
        }

        //el count seria como el length
        echo count($datos);

        $alimentos=array("fruta"=>array("tropical"=>"kiwi",
                                        "citrico"=>"mandarina"),
                        "leche"=>array("animal"=>"vaca",
                                       "vegetal"=>"coco"),
                        "carne");

//        echo $alimentos["leche"]["vegetal"];

        foreach ($alimentos as $clave_alim=>$alim){
            echo "$clave_alim:<br>";
            //mientras haya elementos en la lista
            foreach ($alim as $clave=>$valor){
                echo "$clave=$valor<br>";
            }
            echo "<br>";
        }


?>
</body>
</html>
