<?php
//Dump de errores en el navegador
ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);

?>

<?php

$servername = "localhost:3306";
$username = "root";
$password = "admin1234";

try {
  $conn = new PDO("mysql:host=$servername;dbname=bbdd", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Conexión satisfactoria";
} catch(PDOException $e) {
  echo "Conexión fallida: " . $e->getMessage();
}
?> 