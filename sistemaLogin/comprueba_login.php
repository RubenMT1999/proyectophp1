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

    try{

        $base=new PDO("mysql:host=localhost;dbname=apispringclientes","root","1234");

        $sql="select * from usuarios where nombre= :nombre and password= :password";

        $resultado=$base->prepare($sql);

        //htmlentities convierte cualquier simbolo en html
        //addslashes escapa cualquier simbolo como "" ; ' para no tenerlos en cuenta
        $login=htmlentities(addslashes($_POST["login"]));
        $password=htmlentities(addslashes($_POST["password"]));

        $resultado->bindValue(":nombre",$login);
        $resultado->bindValue(":password",$password);

        $resultado->execute();

        $numero_registros= $resultado->rowCount();

        if ($numero_registros!=0){
            //crea o reanuda la sesion;
            session_start();
            //variable super global usuario, que podremos usar en otro lugar.
            $_SESSION["usuario"] =$_POST["login"];
            header("location:usuario_registrado.php");
        }else{
            //header para redirigir a pagina
            header("location:formulario.html");
        }

    }catch (Exception $e){
        echo $e->getMessage();
        echo $e->getLine();
    }

?>

</body>
</html>
