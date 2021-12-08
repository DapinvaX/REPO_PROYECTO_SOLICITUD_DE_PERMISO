<?php
ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);


define("SERVIDOR", "127.0.0.1");
define("USUARIO", "root");
define("CLAVE", "admin1234");
define("BBDD", "solicitud");


function obtenerConexion(){

    try {

        
    
        $con = new PDO("mysql:host=".SERVIDOR.";dbname=".BBDD, USUARIO, CLAVE);
        
            // Establecemos el modo de error de PDO para que salten excepciones
        
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        } catch(PDOException $e) {
        
            echo "Error: " . $e->getMessage();
            
        }

        return $con;

}

