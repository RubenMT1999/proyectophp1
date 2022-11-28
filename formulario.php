<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>

<form class="mx-5" action="" method="post" id="datosUsuario">
        <div class="mb-3">
            <label for="inputNombre" class="form-label">Nombre</label>
            <input type="text" name="inputNombre" id="inputNombre" class="form-control">
        </div>
        <div class="mb-3">
            <label for="inputPassword" class="form-label">Contraseña</label>
            <input type="text" name="inputPassword" id="inputPassword" class="form-control">
        </div>
        <div class="mb-3">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled>
                <label class="form-check-label" for="disabledFieldsetCheck">
                    Can't check this
                </label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary" name="botonSubmit" id="botonSubmit">Submit</button>
</form>

<?php

//comprueba si hemos pulsado el boton de enviar
    if(isset($_POST["botonSubmit"])){
        $usuario=$_POST["inputNombre"];
        $contrasenia=$_POST["inputPassword"];

        if ($usuario=="Juan" && $contrasenia="1234"){
            echo "Puedes entrar";
        }else{
            echo "No puedes entrar";
        }
    }
?>
</body>
</html>
