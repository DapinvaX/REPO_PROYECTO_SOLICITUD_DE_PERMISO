<?php
//Dump de errores en el navegador
ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Listado de Permisos</title>
  <!-- CDN de los íconos -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- CDN Materialize CSS  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <!-- Estilos propios -->
  <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
  <!-- AQUI EL CONTENIDO DEL SITIO -->
  
  <!--  CDN jQuery -->
  <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
  <!-- CDN Materialize JS  -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
  
  <script>
    $("document").ready(function () {
      
    });
  </script>

   
<?php

require_once("./CONEXION/conexionPDO.php");
require_once("permiso.php");


$permiso = new permiso();



if (isset($_REQUEST["operacion"])) {
    if ($_REQUEST["operacion"]=="modificar") {
        $permiso->modificar_permiso($_POST["nume"], $_POST["nombre"], $_POST["dni"], $_POST["telefono"], $_POST["bloque"], $_POST["fechaIni"], $_POST["fechaFin"]);
        mostrarListado($permiso->listar_permisos(), -1);
    } elseif ($_REQUEST["operacion"]=="borrar") {
        $permiso->borrar_permiso($_REQUEST["nume"]);

        echo "<CENTER>Se ha borrado correctamente el permiso.</CENTER><P>";

        mostrarListado($permiso->listar_permisos(), -1);
    }
} else { // no hay operacion. Ejemplo: La primera vez que se entra
    mostrarListado($permiso->listar_permisos(), -1);
}



function mostrarListado($permisos_array, $elemento)
{
    $html='
<div class="container">
  
      <center>
         <h1>PERMISOS</h1>
      </center>        

      <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>DNI</th>
                        <th>Fecha</th>

                    </tr>
                </thead>

                <tbody>
                   ';

      

          $fila="";

          print_r($permisos_array);
          foreach ($permisos_array as $permiso) {
              if ($elemento != $permiso['id']) {
                  $fila='<tr id='.$permiso['id'].'>

                <td>'.$permiso['id'].'</td>

                <td>'.$permiso['nombre'].'</td>

                <td>'.$permiso['dni'].'</td>

                <td>'.$permiso['fechaIni'].'</td>

                <td>'.'<a href="listarPermisos.php?idPermiso='.$permiso['id'].'" class="btn btn-info" role="button">Ver</a>'.'</td>

                <td>'.'<a href="index.php?operacion=editar&nume='.$permiso['id'].'" class="btn btn-warning" role="button">Modificar</a>'.'</td>

                <td>'.'<a href="index.php?operacion=borrar&nume='.$permiso['id'].'" class="btn btn-danger" role="button">Eliminar</a>'.'</td>

              </tr>';
              } else {
                  $fila='<tr><form method="POST" class="form-inline" action="index.php?operacion=modificar">

                <td>'.$permiso['id'].'</td>

                <td><input type="text" class="form-control" id="nombre" value="'.$permiso['nombre'].'" name="nombre" style="width:150px"></td>

                <td><input type="text" class="form-control" id="dni" value="'.$permiso['dni'].'" name="dni" style="width:150px"></td>

                <td><input type="date" id="telefono" name="telefono" value="'.$permiso['telefono'].'" min="1910-01-01" max="'.date("Y-m-d").'"></td>

                <td><input type="text" class="form-control" id="bloque" value="'.$permiso['bloque'].'" name="bloque" style="width:200px"></td>

                <td><input type="date" id="fecha" name="fechaIni" value="'.$permiso['fechaIni'].'" min="2018-01-01" max="'.date("Y-m-d").'"></td>

                <td><input type="date" id="fecha" name="fechaFin" value="'.$permiso['fechaFin'].'" min="2018-01-01" max="'.date("Y-m-d").'"></td>

                <td>'.'<input type="submit" class="btn btn-success"  value="Guardar" />'.'</td>

                <td>'.'<a href="index.php" class="btn btn-danger" role="button">Cancelar</a>'.'</td>

                <input type="hidden" name="nume" value="'.$elemento.'" />

                </form>

              </tr>';
              }

            

              $html=$html.$fila;
          } //fin del bucle for

          $html=$html.'</tbody>

                          </table>

                          <div id="informacion">
                          
                          </div>

                      </div>';

    echo $html;
}





?>

</body>

</html>