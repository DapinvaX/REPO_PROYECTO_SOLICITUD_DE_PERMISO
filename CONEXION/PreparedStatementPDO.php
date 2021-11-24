<?php

try {
    $con = new PDO("mysql:host=".SERVIDOR.";dbname=".BBDD, USUARIO, CLAVE);

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

/*


    CUIDADO:

    A la  hora de enlazar los datos mediante la función bindParam, si hemos usado el método de usar ? para indicar los parámetros de la sentenia, en PDO se usará la siguiente método bindParam:



    $stmt = $this->conexion->prepare("INSERT INTO Pacientes (nombre, direccion ) VALUES (?, ?)");

    $stmt->bindParam(1, $nombre );

    $stmt->bindParam(2, $direccion );

    $nombre = "José";

    $direccion = "Plaza Italia,9";


    $stmt->execute();


 */
