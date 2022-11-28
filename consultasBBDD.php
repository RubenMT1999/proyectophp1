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

    require("conexionBBDD.php");


    $conexion=new mysqli($db_host,$db_user,$db_password,$db_name);

    //si la conexion no es exitosa..
    if (mysqli_connect_errno()){
    echo "Fallo al conectar con la BBDD";
    exit();
    }

    //mysqli_select_db($conexion,$db_name) or die("No se encuentra la BBDD");

    mysqli_set_charset($conexion,"utf8");

//    $consulta2='insert into clientes (id,nombre,email,telefono,fecha_nacimiento) values (3,"Manolo","man@gmail.com","65655454","2006-09-09")';
//    $resultados2=mysqli_query($conexion,$consulta2);



//    $consultaUpdate = "update clientes set nombre = 'Kiko' where id = 2";
//    $resultadosUpdate = mysqli_query($conexion,$consultaUpdate);

//    $consultaDelete = "delete from clientes where id=4";
//    $resultadosDelete = mysqli_query($conexion,$consultaDelete);
//
//    if($resultadosDelete==false){
//        echo "Error en la consulta";
//    }else{
//        if (mysqli_affected_rows($conexion)==0){
//            echo "No hay registros que eliminar con ese criterio";
//        }else{
//            echo "Se han eliminado " . mysqli_affected_rows($conexion) . " registros";
//        }
//    }


//    while (($fila=mysqli_fetch_row($resultados))){
//    echo $fila[0];
//    echo "$fila[1]  ";
//    echo "$fila[4]<br>";
//    }

    $consulta="select * from clientes";
    $resultados=mysqli_query($conexion,$consulta);


    while (($fila=mysqli_fetch_array($resultados,MYSQLI_ASSOC))){

        echo "<form action='actualizar_registro.php' method='get'>";
        echo "<input type='text' name='id_cliente' value='" . $fila['id'] . "'><br>";
        echo "<input type='text' name='nombre_cliente' value='" . $fila['nombre'] . "'><br>";
        echo "<input type='text' name='email_cliente' value='" . $fila['email'] . "'><br>";
        echo "<input type='text' name='telefono_cliente' value='" . $fila['telefono'] . "'><br>";
        echo "<input type='text' name='fecha_cliente' value='" . $fila['fecha_nacimiento'] . "'><br>";
        echo "<input type='submit' name='enviando' value='Actualizar'>";
        echo "</form>";
//        echo $fila["nombre"] . " ";

        echo "<br>";
    }






    mysqli_close($conexion);
?>


</body>
</html>
