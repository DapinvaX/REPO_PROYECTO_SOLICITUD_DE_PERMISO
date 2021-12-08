<?php
//Dump de errores en el navegador
ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);

?>

<?php

try {
    $con = new PDO("mysql:host=" . SERVIDOR . ";dbname=" . BBDD, USUARIO, CLAVE);
    // Establecemos el modo de error de PDO para que salten excepciones
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // preparar y vincular parámetros
    $stmt = $con->prepare("INSERT INTO Pacientes2 (nombre, direccion ) VALUES (:nombre, :direccion)");
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':direccion', $direccion);

    // establecemos los parámetros y ejecutamos para insertar
    $nombre = "José";
    $direccion = "Plaza Italia,9";
    $stmt->execute();

    //insertaramos
    $nombre = "María";
    $direccion = "Av. las acacias,45";
    $stmt->execute();

    //insertaramos
    $nombre = "Julia";
    $direccion = "Calle Doritos,11";
    $stmt->execute();

    echo "Nuevas filas insertadas correctamente";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$con = null;
