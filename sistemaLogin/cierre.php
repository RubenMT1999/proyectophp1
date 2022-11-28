<?php
//antes tiene que reanudar la sesion con start
    session_start();
    session_destroy();
    header("location:formulario.html");
?>