<?php



define("SERVIDOR", "localhost");

define("USUARIO", "root");

define("CLAVE", "");



try {
    $con = new PDO("mysql:host=".SERVIDOR, USUARIO, CLAVE);

    // Establecemos el modo de error de PDO para que salten excepciones

    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "CREATE DATABASE bbdd_solicitudpermisos";

    // Se usa exec() porque no se devuelven resultados

    $con->exec($sql);

    echo "<p>Base de datos creada con éxito<br>";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}



//Cerramos la conexión

$con = null;
