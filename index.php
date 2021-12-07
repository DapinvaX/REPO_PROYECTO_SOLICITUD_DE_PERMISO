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

  <div class="container">
    <div class="row" style="margin: bottom 5px;cm;">
      <div class="col-md-12">
          <?php

          require_once("profesores.php");


          $profesor = new profesor();



          if (isset($_REQUEST["operacion"])) {
              if ($_REQUEST["operacion"]=="modificar") {
                  $profesor->modificar_profesor($_POST["nume"], $_POST["nombre"], $_POST["dni"], $_POST["telefono"], $_POST["firma"]);
                  mostrarListado($profesor->listar_profesores(), -1);
              } elseif ($_REQUEST["operacion"]=="borrar") {
                  $profesor->borrar_profesor($_REQUEST["nume"]);

                  echo "<CENTER>El profesor ha sido eliminado satisfactoriamente.</CENTER><P>";

                  mostrarListado($profesor->listar_profesores(), -1);
              }
          } else { // no hay operación. Ejemplo: La primera vez que se entra
              mostrarListado($profesor->listar_profesores(), -1);
          }



          function mostrarListado($profesores_array, $elemento)
          {
              $html='
              <div class="row">
            
                <center>
                  <h1>PERMISOS</h1>
                </center>        

                <table>
                          <thead>
                              <tr>
                                  <th>ID</th>
                                  <th>Nombre</th>
                                  <th>DNI</th>
                                  <th>TELEFONO</th>

                              </tr>
                          </thead>

                          <tbody>
                            ';

                

                    $fila="";

                    //print_r($profesores_array);
                    foreach ($profesores_array as $profesor) {
                        if ($elemento != $profesor['id']) {
                            $fila='<tr id='.$profesor['id'].'>

                          <td>'.$profesor['id'].'</td>

                          <td>'.$profesor['nombre'].'</td>

                          <td>'.$profesor['dni'].'</td>

                          <td>'.$profesor['telefono'].'</td>

                          <td>'.$profesor['firma'].'</td>

                          <td>'.'<a href="listarProfesores.php?idProfesor='.$profesor['id'].'" class="waves-effect waves-light btn  teal lighten-3" role="button">Ver</a>'.'</td>

                          <td>'.'<a href="index.php?operacion=editar&nume='.$profesor['id'].'" class="waves-effect waves-light btn amber lighten-1" role="button">Modificar</a>'.'</td>

                          <td>'.'<a href="index.php?operacion=borrar&nume='.$profesor['id'].'" class="waves-effect waves-light btn red accent-4" role="button">Eliminar</a>'.'</td>

                        </tr>';
                        } else {
                            $fila='<tr><form method="POST" class="form-inline" action="index.php?operacion=modificar">

                          <td>'.$profesor['id'].'</td>

                          <td><input type="text" class="form-control" id="nombre" value="'.$profesor['nombre'].'" name="nombre" style="width:150px"></td>

                          <td><input type="text" class="form-control" id="dni" value="'.$profesor['dni'].'" name="dni" style="width:150px"></td>

                          <td><input type="text" class="form-control" id="telefono" value="'.$profesor['telefono'].'" name="telefono" style="width:150px"></td>

                          <td><input name="firma" id="firma" type="file"/></td>

                          <td>'.'<input type="submit" class="waves-effect waves-light btn green accent-3"  value="Guardar" name="guardar" />'.'</td>

                          <td>'.'<a href="index.php" class="waves-effect waves-light btn red accent-4" role="button">Cancelar</a>'.'</td>

                          <input type="hidden" name="nume" value="'.$elemento.'" />

                          </form>

                        </tr>';
                        }

                      

                        $html=$html.$fila;
                    } //fin del bucle

                    $html=$html.'</tbody>

                                    </table>


                                </div>';

              echo $html;
          }


          //Código para subir imagen de firma
          if (isset($_POST['guardar'])) {
            //Recogemos el archivo enviado por el formulario
            $firma = $_FILES['firma']['name'];
            //Si el archivo contiene algo y es diferente de vacio
            if (isset($firma) && $firma != "") {
              //Obtenemos algunos datos necesarios sobre el archivo
              $tipo = $_FILES['firma']['type'];
              $tamano = $_FILES['firma']['size'];
              $temp = $_FILES['firma']['tmp_name'];
              //Se comprueba si el archivo a cargar es correcto observando su extensión y tamaño
              if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 2000000))) {
                echo '<div><b>Error. La extensión o el tamaño de los archivos no es correcta.<br/>
                - Se permiten archivos .gif, .jpg, .png. y de 200 kb como máximo.</b></div>';
              }
              else {
                //Si la imagen es correcta en tamaño y tipo
                //Se intenta subir al servidor
                if (move_uploaded_file($temp, 'images/'.$firma)) {
                    //Cambiamos los permisos del archivo a 777 para poder modificarlo posteriormente
                    chmod('images/'.$firma, 0777);
                    //Mostramos el mensaje de que se ha subido co éxito
                    echo '<div><b>Se ha subido correctamente la imagen.</b></div>';
                    //Mostramos la imagen subida
                    echo '<p><img src="images/'.$firma.'"></p>';
                }
                else {
                    //Si no se ha podido subir la imagen, mostramos un mensaje de error
                    echo '<div><b>Ocurrió algún error al subir el fichero. No pudo guardarse.</b></div>';
                }
              }
            }
          }


          ?>
        </div>
    </div>
    

    <div class="row">
      <div class="col-md-6">
        <input type="button" class="waves-effect waves-light btn  teal lighten-3" id="myBtn" value="Crear nuevo formulario">
        <input type="button" class="waves-effect waves-light btn  teal lighten-3" id="myBtn2" value="Crear nuevo PDF">
      </div>

      <div class="col-md-6">
       <!-- <input type="button" class="waves-effect waves-light btn  teal lighten-3" id="myBtn2" value="Crear nuevo PDF"> -->
      </div>
    </div>
</div>
<script>

            var btn = document.getElementById('myBtn');
            btn.addEventListener('click', function () {
                document.location.href = 'nuevoPermiso.php';
            });

            var btn = document.getElementById('myBtn2');
            btn.addEventListener('click', function () {
                document.location.href = 'crearpdf.php';
            });
        </script>
</body>

</html>