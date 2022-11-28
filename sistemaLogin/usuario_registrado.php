<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
    session_start();

    if (!isset($_SESSION["usuario"])){
        header("location:formulario.html");
    }
?>

  <h1>Bienvenido usuario</h1>
  <p>Te has logeado correctamente</p>

<?php
    echo "Hola: " . $_SESSION["usuario"] . "<br>";
?>

    <p><a href="cierre.php">Cierra sesión</a></p>

</body>
</html>