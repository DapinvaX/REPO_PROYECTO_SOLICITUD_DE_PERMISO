<?php



//Método 1: Añadiendo el archivo conexion.php que obtiene la conexión

// leyendo los datos de conexión de un fichero .ini

include_once 'conexionPDO.php';



//Método 2: Usando un array para almacenar los datos de conexión.

// Este array puede ir fuera o dentro del fichero que va a usar la base de datos.

$dbConfig = array(

   'host' => 'localhost',

   'port' => '3306',

   'user' => 'usuarioDAW',

   'pass' => 'admin1234',

   'db' => 'dawBD',

);



//Método 3: Crear constantes para definir los datos de conexión.

//Estas constantes pueden ir dentro o fuera del fichero que va a usar la base de datos.

define("SERVIDOR", "localhost");

define("USUARIO", "usuarioDAW");

define("CLAVE", "admin1234");

define("BBDD", "dawBD");



// Crear una conexion

// En la conexión, indicamos la base de datos que queremos utilizar.

try {



   //Método 1

   //La conexión nos la proporciona conexion.php



   //Método 2

   //$conexion = new PDO("mysql:host=".$dbConfig['host'].";dbname=".$dbConfig['db'], $dbConfig['user'], $dbConfig['pass']);



   //Método 3

   //$conexion = new PDO("mysql:host=".SERVIDOR.";dbname=".BBDD, USUARIO, CLAVE);



   // Establecemos el modo de error de PDO para que salten excepciones

   $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



   $sql = "INSERT INTO participantes (nombre, numero,email) VALUES ('Luis', 23, 'luismr@ies.es')";

   // se usa exec() porque la sentencia no devuelve ningún valor

   $conexion->exec($sql);

   echo "<p>Nueva fila creada correctamente";

 } catch(PDOException $e) {

   echo $sql . "<br>" . $e->getMessage();

 }

 $conexion = null;





?>