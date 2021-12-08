<?php
ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);

require_once 'conexion.php';


function insertarProfesor($dni,$nombre,$telefono,$firma,$asignatura)
{


$con = obtenerConexion();    
try{
    // preparar y vincular parámetros

    $stmt = $con->prepare("INSERT INTO profesor ( dni, nombre, telefono, firma, asignatura) VALUES (:dni, :nombre, :telefono, :firma, :asignatura)");

    // $stmt->bindParam(':idProfesor', $idProfesor);
    $stmt->bindParam(':dni', $dni);
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':telefono', $telefono);
    $stmt->bindParam(':firma', $firma);
    $stmt->bindParam(':asignatura', $asignatura);
  


    $stmt->execute();

    $id = $con->lastInsertId();

    return $id;

  
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$con = null;


}