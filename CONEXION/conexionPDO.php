<?php
//NO TOCAR
define("SERVIDOR", "localhost");
define("USUARIO", "root");
define("CLAVE", "");
define("BBDD", "permisos");


/* Recibe el nombre de la base de datos que queremos usar.*/
/* Si no se indica ningún nombre de la bases de datos se pasa cadena '' como valor por defecto.*/

function obtenerConexionBD()
{
    /* Intentamos establecer una conexión con el servidor.*/
    try {


        $conexion  = new PDO("mysql:host=" . SERVIDOR . ";dbname=" . BBDD . ";charset=utf8", USUARIO, CLAVE);


        /* Establecemos atributos para configurar la conexión PDO*/

        $conexion->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "<p>Conexión realizada";
        echo '<script>alert("Conexión realizada");</script>';
        return ($conexion);
    } catch (PDOException $e) {
        die("<p><H3>No se ha podido establecer la conexión.
                 <p>Compruebe si está activado el servidor de bases dedatos MySQL.</H3></p>\n <p>Error: " . $e->getMessage() . "</p>\n");
        exit();
    } // end try
}
