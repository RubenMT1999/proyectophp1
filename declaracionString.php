<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .resaltar{
            font-weight:bold;
            color: red;
        }
    </style>
</head>
<body>
<?php

    echo "<p class='resaltar'>Esto es un ejemplo de frase</p>";

    $var1="Casa";
    $var2="CASA";

    $resultado= strcasecmp($var1,$var2);

    if ($resultado){
        echo "No coinciden";
    }else{
        echo "Coinciden";
    }



?>
</body>
</html>

