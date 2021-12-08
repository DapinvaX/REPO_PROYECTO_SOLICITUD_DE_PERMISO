<?php
ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);

require_once 'conexion.php';

require_once 'profesorDAO.php';

function insertarPermiso($fechaIni,$fechaFin,$motivo,$diaCompleto,$concedido,$fecha,$idProfesor)
{

    

$con = obtenerConexion();    
try{
    // preparar y vincular parámetros

    $stmt = $con->prepare("INSERT INTO permisos (fechaIni, fechaFin, motivo, diaCompleto,concedido,fecha,profesor) VALUES (:fechaIni, :fechaFin, :motivo, :diaCompleto, :concedido, :fecha,:profesor)");

    $stmt->bindParam(':fechaIni', $fechaIni);
    $stmt->bindParam(':fechaFin', $fechaFin);
    $stmt->bindParam(':fecha', $fecha);
    $stmt->bindParam(':motivo', $motivo);
    $stmt->bindParam(':concedido', $concedido);
    $stmt->bindParam(':diaCompleto', $diaCompleto);
    $stmt->bindParam(':profesor', $idProfesor);


    $stmt->execute();

    $id = $con->lastInsertId();

    return $id;

  
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$con = null;


}