<?php

    $host="localhost";
    $pass="1234";
    $user="root";
    $dbnombre="apispringclientes";
    $dsn="mysql:host=$host;dbname=$dbnombre";

    try{
        $pdoConnection = new PDO($dsn,$user,$pass);
        $pdoConnection -> exec("set character set utf8");

        //en lugar de ? podemos usar marcadores como :id
        //lo podemos usar en el insert por ejemplo values(:id,:nombre...)
        //luego en el execute usamos ":id"=>1 o le pasamos una variable del form.
        $sql="select nombre,telefono,email from clientes where id=?";

        //devuelve objeto PdoStatement
        $resultado = $pdoConnection->prepare($sql);

        //pasamos los parametros por el array
        $resultado->execute(array(1));

        // fetch asocia dentro del array o pdostatement el nombre de los campos
        //con el nombre de las sentencias sql. Los :: son para los atributos de la clase
        while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
            echo "Nombre Cliente " . $registro['nombre'] . "Telefono " . $registro['telefono'] .
                 "Email " . $registro['email'];
        }
        //cierra la tabla en memoria.
        $resultado->closeCursor();

    }catch (Exception $e){
        die('Error: ' . $e->getMessage());
    }




?>