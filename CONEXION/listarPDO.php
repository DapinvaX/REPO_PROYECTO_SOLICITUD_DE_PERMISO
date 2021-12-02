<?php
include_once 'conexionPDO.php';

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "select * from profesor";
  // use exec() because no results are returned
  $datos =$conn->prepare($sql);
  $datos->execute();
  foreach($datos as $fila){
    echo $fila['dni'];
    echo $fila['nombre'];
    echo $fila['telefono'];
    echo $fila['firma'];
  }
  
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?> 