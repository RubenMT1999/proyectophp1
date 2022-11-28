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

    if (mysqli_connect_errno()){
        echo "Fallo al conectar con la BBDD";
        exit();
    }

    @$namenombre=$_GET["namenombre"];
    @$nameemail=$_GET["nameemail"];
    @$nametelefono=$_GET["nametelefono"];
    @$namefecha=$_GET["namefecha"];

    $consulta2="insert into clientes (nombre,email,telefono,fecha_nacimiento) values ('$namenombre','$nameemail','$nametelefono','$namefecha')";
    $resultados2=mysqli_query($conexion,$consulta2);


    mysqli_close($conexion);
?>
</body>
</html>
