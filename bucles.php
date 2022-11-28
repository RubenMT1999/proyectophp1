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

    $var=1;

    while ($var<6){
        echo "Ejecutando codigo en el bucle <br>";
        $var++;
    }

    do{
        echo "Ejecutando codigo en el bucle <br>";
        $var++;
    }while($var<6);

    //el for es igual que en java

?>
</body>
</html>
