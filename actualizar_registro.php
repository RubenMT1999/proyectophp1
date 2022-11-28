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

    //para evitar inyeccion sql usarr real_escape. mysqli_add_slashed()
    $nameid= mysqli_real_escape_string($conexion, $_GET["id_cliente"]) ;
    $namenombre=mysqli_real_escape_string($conexion, $_GET["nombre_cliente"]);
    $nameemail=mysqli_real_escape_string($conexion, $_GET["email_cliente"]);
    $nametelefono=mysqli_real_escape_string($conexion, $_GET["telefono_cliente"]);
    $namefecha=mysqli_real_escape_string($conexion, $_GET["fecha_cliente"]);

    $consultaUpdate = "update clientes set nombre ='$namenombre',email='$nameemail',telefono='$nametelefono' where id='$nameid'";
    $resultadosUpdate = mysqli_query($conexion,$consultaUpdate);



    if ($resultadosUpdate==false){
        echo "Error en la consulta";
    }

    //-----------------------------------------------------------------
    //Consultas preparadas, donde pasamos parámetros types "s" de string
    //para meter mas valores ejemplo: "ssissd",las variables que sean en la query"

    $consulta="select * from clientes where nombre=?";
    $resultConsultaPreparada=mysqli_prepare($conexion,$consulta);
    $ok=mysqli_stmt_bind_param($resultConsultaPreparada,"s",$namenombre);
    $ok=mysqli_stmt_execute($resultConsultaPreparada);

    if ($ok==false){
        echo "Error al ejecutar la consulta";
    }else{
        $ok=mysqli_stmt_bind_result($resultConsultaPreparada,$id,$nombre,$email,$telefono,$fechaNacimiento);

        echo "Clientes encontrados <br>";
        while (mysqli_stmt_fetch($resultConsultaPreparada)){
            echo $nombre . " " . $email . " " . $telefono . "<br>";
        }
        mysqli_stmt_close($resultConsultaPreparada);
    }

    mysqli_close($conexion);
?>
</body>
</html>
