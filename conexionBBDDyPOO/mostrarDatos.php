
<?php
  require "DevuelveClientes.php";

//si estamos usando un formulario
//    $nombre = $_GET["buscar"];
//luego le pasamos la variable a getClientes()

  $clientes = new DevuelveClientes();

  $arrayClientes = $clientes->getClientes();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php

    foreach ($arrayClientes as $elemento){

        echo "<table><tr><td>";
        echo $elemento['nombre'] . "</td><td>";
        echo $elemento['telefono'] . "</td><td>";
        echo $elemento['email'] . "</td><td></tr></table>";

        echo "<br>";
    }

?>

</body>
</html>