<?php

    $conexion = new mysqli("localhost","root","1234","apispringclientes");

    if ($conexion->connect_errno){
        echo "Falló la conexión " . $conexion->connect_errno;
    }

//    DIFERENCIAS USANDO LA CONEXION COMO OBJETO.
//    mysqli_set_charset($conexion,"utf8");
    $conexion->set_charset("utf8");

    $sql="select * from clientes";

//    $resultados=mysqli_query($conexion,$sql);
    $resultados=$conexion->query($sql);

    if ($conexion->errno){
        //mata el error
        die($conexion->error);
    }

    //while ($fila=mysqli_fetch_array($resultados,MYSQL_ASSOC){
    while ($fila=$resultados->fetch_assoc()){
        //tambien podemos poner indices en lugar del nombre
        echo $fila['nombre'] . $fila['email'] . $fila['telefono'] . $fila['fecha_nacimiento'] . "<br>";

    }

//    mysqli_close($conexion);
    $conexion->close();
?>
