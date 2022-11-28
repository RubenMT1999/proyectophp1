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

    $var1=true;
    $var2=false;
    $resultado= $var1 && $var2;


    if($resultado == true){
        echo "Correcto";
    }else{
        echo "Incorrecto";
    }

    echo $resultado==true ? "Es true" : "Es false";

    switch ($resultado){
        case true:
            echo "SWITCH: es true";
            break;
        case false:
            echo "SWITCH: es false";
            break;
        default:
            echo "Default";
    }



?>
</body>
</html>


