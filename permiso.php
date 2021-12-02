<?php
//Dump de errores en el navegador
ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);

?>

<?php
require_once("./CONEXION/conexionPDO.php");

class permiso
{
    private $conexion;

    public function __construct()
    {
        $this->conexion = obtenerConexionBD();
    }


    public function listar_permisos()
    {
        try {
            $stmt = $this->conexion->prepare("SELECT id,fechaIni, fechaFin FROM permisos");
            $stmt->setFetchMode(PDO::FETCH_OBJ);
            $stmt->execute();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

        return $stmt;
    }


    public function alta_Permiso($nombre, $dni, $telefono, $bloque, $fechaIni, $fechaFin)
    {
        try {
            $nombre_Permiso = "";
            $dni_Permiso = "";
            $telefono_Permiso = "";
            $bloque_Permiso = "";
            $fechaIni_Permiso = "";
            $fechaFin_Permiso = "";

            // preparar y vincular parámetros

            $stmt = $this->conexion->prepare("INSERT INTO permisos (nombre, dni, telefono, bloque, fechaIni, fechaFin ) 
                                             VALUES (:nombre, :dni, :telefono, :bloque, :fechaIni, :fechaFin)");


            $stmt->bindParam(':nombre', $nombre_Permiso);

            $stmt->bindParam(':dni', $dni_Permiso);

            $stmt->bindParam(':telefono', $telefono_Permiso);

            $stmt->bindParam(':bloque', $bloque_Permiso);

            $stmt->bindParam(':fechaIni', $fechaIni_Permiso);

            $stmt->bindParam(':fechaFin', $fechaFin_Permiso);

       

            // establecemos los parámetros y ejecutamos para insertar

            $nombre_Permiso = $nombre;
            $dni_Permiso = $dni;
            $telefono_Permiso = $telefono;
            $bloque_Permiso = $bloque;
            $fechaIni_Permiso = $fechaIni;
            $fechaFin_Permiso = $fechaFin;



            $stmt->execute();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }


    public function obtener_Permiso_por_id($id)
    {
        try {
            $stmt = $this->conexion->prepare("SELECT id, nombre, dni, telefono, bloque, fechaIni, fechaFin FROM permisos WHERE id=".$id);

      

            $stmt->execute();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

        return $stmt;
    }



    public function modificar_Permiso($id, $nombre, $dni, $telefono, $bloque, $fechaIni, $fechaFin)
    {
        try {
            $nombre_Permiso = "";
            $dni_Permiso = "";
            $telefono_Permiso = "";
            $bloque_Permiso = "";
            $fechaIni_Permiso = "";
            $fechaFin_Permiso = "";

            // preparar y vincular parámetros

            $stmt = $this->conexion->prepare("UPDATE permisos 
        SET nombre=:nombre, dni=:dni, telefono=:telefono, bloque=:bloque, fechaIni=:fechaIni, fechaFin=:fechaFin 
        WHERE id=:id");

            $stmt->bindParam(':id', $id_Permiso);
            $stmt->bindParam(':nombre', $nombre_Permiso);
            $stmt->bindParam(':dni', $dni_Permiso);
            $stmt->bindParam(':telefono', $telefono_Permiso);
            $stmt->bindParam(':bloque', $bloque_Permiso);
            $stmt->bindParam(':fechaIni', $fechaIni_Permiso);
            $stmt->bindParam(':fechaFin', $fechaFin_Permiso);

            // establecemos los parámetros y ejecutamos para insertar
            $id_Permiso = $id;
            $nombre_Permiso = $nombre;
            $dni_Permiso = $dni;
            $telefono_Permiso = $telefono;
            $bloque_Permiso = $bloque;
            $fechaIni_Permiso = $fechaIni;
            $fechaFin_Permiso = $fechaFin;



            $stmt->execute();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }


    public function borrar_Permiso($id)
    {
        //Hecho por DapinvaX

        try {
            $id_Permiso="";

            // preparar y vincular parámetros

            $stmt = $this->conexion->prepare("DELETE FROM permisos WHERE id=:id");

            $stmt->bindParam(':id', $id_Permiso);

      

            // establecemos los parámetros y ejecutamos para insertar

            $id_Permiso = $id;

  

            $stmt->execute();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
