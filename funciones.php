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

    function suma($suma1, $suma2){
        $resultado=$suma1+$suma2;
        return $resultado;
    }

    echo (suma(5,7));

    function frase_mayus($frase,$conversion=true){
        $frase=strtolower($frase);

        if ($conversion==true){
            //pone en mayuscula
            $resultado=ucwords($frase);
        }else{
            $resultado=strtoupper($frase);
        }
        return $resultado;
    }

    //el segundo parametro es opcional. porr defecto va a establecer que es true.
    echo (frase_mayus("esto es una prueba"));

//si ponemos el $ va a modificar la variable numero, sino no lo hace.
    function incrementa(&$valor1){
        $valor1++;
        return $valor1;
    }

    $numero=5;
    echo incrementa($numero);
    echo $numero;

?>
</body>
</html>
