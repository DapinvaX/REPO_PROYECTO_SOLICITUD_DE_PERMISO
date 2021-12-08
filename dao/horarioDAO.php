<?php
ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);

require_once 'conexion.php';

//require_once 'permisosDAO.php';

function insertarHorario($idPermiso, $auladiurno1, $auladiurno2, $auladiurno3, $auladiurno4, $auladiurno5, $auladiurno6, $grupodiurno1, $grupodiurno2, $grupodiurno3, $grupodiurno4,$grupodiurno5, $grupodiurno6, $aulanocturno1, $aulanocturno2, $aulanocturno3, $aulanocturno4, $aulanocturno5, $aulanocturno6, $gruponocturno1, $gruponocturno2,$gruponocturno3,$gruponocturno4,$gruponocturno5,$gruponocturno6)
{


$con = obtenerConexion();    
try{
    // preparar y vincular parámetros

    $stmt = $con->prepare("INSERT INTO horarios (horario, auladiurno1, auladiurno2, auladiurno3, auladiurno4, auladiurno5, auladiurno6, grupodiurno1, grupodiurno2, grupodiurno3, grupodiurno4,grupodiurno5, grupodiurno6, aulanocturno1, aulanocturno2, aulanocturno3, aulanocturno4, aulanocturno5, aulanocturno6, gruponocturno1, gruponocturno2,gruponocturno3,gruponocturno4,gruponocturno5,gruponocturno6) VALUES (:horario ,:auladiurno1, :auladiurno2, :auladiurno3, :auladiurno4, :auladiurno5, :auladiurno6, :grupodiurno1, :grupodiurno2, :grupodiurno3, :grupodiurno4,:grupodiurno5, :grupodiurno6, :aulanocturno1, :aulanocturno2, :aulanocturno3, :aulanocturno4, :aulanocturno5, :aulanocturno6, :gruponocturno1, :gruponocturno2, :gruponocturno3, :gruponocturno4, :gruponocturno5, :gruponocturno6)");


    $stmt->bindParam(':horario', $idPermiso);
    $stmt->bindParam(':auladiurno1', $auladiurno1);
    $stmt->bindParam(':auladiurno2', $auladiurno2);
    $stmt->bindParam(':auladiurno3', $auladiurno3);
    $stmt->bindParam(':auladiurno4', $auladiurno4);
    $stmt->bindParam(':auladiurno5', $auladiurno5);
    $stmt->bindParam(':auladiurno6', $auladiurno6);

    $stmt->bindParam(':grupodiurno1', $grupodiurno1);
    $stmt->bindParam(':grupodiurno2', $grupodiurno2);
    $stmt->bindParam(':grupodiurno3', $grupodiurno3);
    $stmt->bindParam(':grupodiurno4', $grupodiurno4);
    $stmt->bindParam(':grupodiurno5', $grupodiurno5);
    $stmt->bindParam(':grupodiurno6', $grupodiurno6);

    $stmt->bindParam(':aulanocturno1', $aulanocturno1);
    $stmt->bindParam(':aulanocturno2', $aulanocturno2);
    $stmt->bindParam(':aulanocturno3', $aulanocturno3);
    $stmt->bindParam(':aulanocturno4', $aulanocturno4);
    $stmt->bindParam(':aulanocturno5', $aulanocturno5);
    $stmt->bindParam(':aulanocturno6', $aulanocturno6);

    $stmt->bindParam(':gruponocturno1', $gruponocturno1);
    $stmt->bindParam(':gruponocturno2', $gruponocturno2);
    $stmt->bindParam(':gruponocturno3', $gruponocturno3);
    $stmt->bindParam(':gruponocturno4', $gruponocturno4);
    $stmt->bindParam(':gruponocturno5', $gruponocturno5);
    $stmt->bindParam(':gruponocturno6', $gruponocturno6);





    $stmt->execute();

    $id = $con->lastInsertId();

    return $id;

  
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$con = null;


}