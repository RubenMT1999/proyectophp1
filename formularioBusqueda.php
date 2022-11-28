<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php

    function ejecuta_consulta($labusqueda){

        //obtiene el valor del cuadro de texto buscar del formularioBusqueda.
        //$busqueda=$_GET["buscar"];

        require("conexionBBDD.php");
        $conexion=new mysqli($db_host,$db_user,$db_password,$db_name);

        //si la conexion no es exitosa..
        if (mysqli_connect_errno()){
            echo "Fallo al conectar con la BBDD";
            exit();
        }

        //mysqli_select_db($conexion,$db_name) or die("No se encuentra la BBDD");
        mysqli_set_charset($conexion,"utf8");
        $consulta="select * from clientes WHERE nombre='$labusqueda'";
        $resultados=mysqli_query($conexion,$consulta);

        //    while (($fila=mysqli_fetch_row($resultados))){
        //    echo $fila[0];
        //    echo "$fila[1]  ";
        //    echo "$fila[4]<br>";
        //    }

        while (($fila=mysqli_fetch_array($resultados,MYSQLI_ASSOC))){
            echo $fila["nombre"] . " ";
            echo $fila["email"] . " "  ;
            echo $fila["fecha_nacimiento"];
            echo "<br>";
        }

        mysqli_close($conexion);
    }
    ?>
</head>

<body>

    <?php
    //@ hace que elimine el error en local cuando la variable sea nula.
        @$mibusqueda=$_GET['buscar'];
        //cual es la pagina del servidor a la que debe llamar.
        $mipag=$_SERVER["PHP_SELF"];

        if ($mibusqueda!=NULL){
            ejecuta_consulta($mibusqueda);
        }else{
            echo ("<form action='" . $mipag . "' method='get'>
            <label>Buscar:<input type='text' name='buscar'></label>
            <button type='submit' name='enviando'>Dale!</button>
            </form>");
        }
    ?>



</body>
</html>
