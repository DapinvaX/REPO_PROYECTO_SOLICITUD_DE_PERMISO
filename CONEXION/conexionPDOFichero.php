<?php
//Dump de errores en el navegador
ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);

?>

<?php

// Carga la configuración

$config = parse_ini_file('conexionDesdeFicheroINI.ini');



//Conexión con los datos del 'config.ini'

//Método PDO

try {
    $conexion = new PDO("mysql:host=".$config['host'].";dbname=".$config['dbname'], $config['username'], $config['password']);



    // Establecemos el modo de error de PDO para que salten excepciones

    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
    /*Cerrar conexion PDO
        $conexion = null;
    */
