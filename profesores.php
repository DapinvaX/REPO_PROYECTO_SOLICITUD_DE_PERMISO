<?php 

    require_once("./CONEXION/conexionPDO.php");

    
    class profesor{

        
        public function __construct(){
            
            $this->conexion = obtenerConexionBD();
        
        }

        //Listar profesores
        function listar_profesores(){

  
            try {
            
               $stmt = $this->conexion->prepare("SELECT * FROM profesor");
         
               
         
                $stmt->execute();
               
                
         
         
            } catch(PDOException $e) {
         
            echo "Error: " . $e->getMessage();
         
            }
         
            return $stmt;
         
         
         
         }
    
    }

    //Obtener profesor por ID
    function obtener_profesor_por_id($id){

  
        try {
        
           $stmt = $this->conexion->prepare("SELECT id, dni, nombre, telefono, firma FROM profesor WHERE id=".$id);
     
           
     
            $stmt->execute();
           
            
     
     
        } catch(PDOException $e) {
     
        echo "Error: " . $e->getMessage();
     
        }
     
        return $stmt;
     
     
        
     }

     function modificar_profesor($id, $nombre, $dni, $telefono, $firma){

   
        try {
     
           $id_profesor = "";
           $dni_profesor= "";
           $nombre_profesor = "";
           $telefono_profesor = "";
           $firma_profesor = "";
     
             // preparar y vincular parámetros
     
             $stmt = $this->conexion->prepare("UPDATE profesor 
             SET nombre=:nombre,dni=:dni,telefono=:telefono,firma=:firma 
             WHERE id=:id");
     
              $stmt->bindParam(':id', $id_profesor);
              $stmt->bindParam(':dni', $dni_profesor);
              $stmt->bindParam(':nombre', $nombre_profesor);
              $stmt->bindParam(':telefono', $telefono_profesor);  
              $stmt->bindParam(':firma', $firma_profesor);    
     
             // establecemos los parámetros y ejecutamos para insertar
             $id_profesor = $id;
             $dni_profesor = $dni;
             $nombre_profesor = $nombre;
             $telefono_profesor = $telefono;
             $firma_profesor = $firma;
     
     
     
             $stmt->execute();
     
     
     
      } catch(PDOException $e) {
     
             echo "Error: " . $e->getMessage();
     
      }
     
        
       
     
     }
     
     //Borrar profesor por ID
     function borrar_profesor($id){
     
     
     
        try {
     
           $id_profesor="";
     
            // preparar y vincular parámetros
     
            $stmt = $this->conexion->prepare("DELETE FROM profesor WHERE id=:id");
     
            $stmt->bindParam(':id', $id_profesor);
     
           
     
            // establecemos los parámetros y ejecutamos para insertar
     
            $id_profesor = $id;
     
       
     
            $stmt->execute();
     
     } catch(PDOException $e) {
     
            echo "Error: " . $e->getMessage();
     
     }
     
     
     
     
     
       
     
     }
     

?>