<?php 

require ("permiso.php");
$permiso = new permiso();


   if(isset($_GET["id"])){
    $id_Permiso = $_GET["id"];
    
   }

   $resultado = $permiso->obtener_permiso_por_id($id_Permiso);

   $html = "";
   foreach($resultado as $datosPermiso){
       // $html .= $datosPaciente['nombre']." - ".$datosPaciente['apellidos']." - ".$datosPaciente['edad']." - ".$datosPaciente['direccion']." - ".$datosPaciente['telefono']." - ".$datosPaciente['fecha'];
        $html .= 
        "<table class='table table-striped table-inverse table-responsive'>
            <thead class='thead-inverse'>
                <tr>
                    <th>NOMBRE Y APELLIDOS</th>
                    <th>DNI</th>
                    <th>TELEFONO</th>
                    <th>BLOQUE</th>
                    <th>FECHA DE INICIO</th>
                    <th>FECHA DE FIN</th>
                </tr>
                </thead>
                <tbody >
                    <tr>
                        <td scope='row'>
                        ".$datosPermiso['nombre']."
                        </td>
                        <td>
                        ".$datosPermiso['dni']."
                        </td>
                        <td>
                        ".$datosPermiso['telefono']."
                        </td>
                        <td>
                        ".$datosPermiso['bloque']."
                        </td>
                        <td>
                        ".$datosPermiso['fechaIni']."
                        </td>
                        <td>
                        ".$datosPermiso['fechaFin']."
                        </td>
                    </tr>
            </tbody>
    </table>";
   }

   //echo "EXISTE EL PACIENTE CON id:".$idPaciente;
   echo $html;

?>