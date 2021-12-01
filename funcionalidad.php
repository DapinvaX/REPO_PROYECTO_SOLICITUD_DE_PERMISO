<?php
//Dump de errores en el navegador
ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);

?>

<?php

    //Recogemos los parametros en variables

    $nombre = $_POST("first_name");
    $apellido = $_POST("last_name");
    $direccion = $_POST("address");
