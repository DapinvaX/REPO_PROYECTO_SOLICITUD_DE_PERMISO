<?php

require ("profesores.php");

$profesor = new profesor();

if(isset($_POST['id']))
{
    $id = $_POST['id'];
}
if(isset($_POST['nombre']))
{
    $nombre = $_POST['nombre'];
}
if(isset($_POST['telefono']))
{
    $telefono = $_POST['telefono'];
}
if(isset($_POST['firma']))
{
    $firma = $_POST['firma'];
}

  $id = $profesor->alta_profesor($nombre,$telefono,$firma);

  echo $id;

 /* $html = '<tr>

  <td>'.$id.'</td>

  <td>'.$nombre.'</td>

  <td>'.$apellidos.'</td>

  <td>'.$edad.'</td>

  <td>'.$direccion.'</td>

  <td>'.$telefono.'</td>

  <td>'.$fecha.'</td>

  <td>'.'<a href="index.php?operacion=editar&nume='.$id.'" class="btn btn-info" role="button">Modificar</a>'.'</td>

  <td>'.'<a href="index.php?operacion=borrar&nume='.$id.'" class="btn btn-danger" role="button">Eliminar</a>'.'</td>

  <td>'.'<a href="listarTest.php?idPaciente='.$id.'" class="btn btn-warning" role="button">Ver</a>'.'</td>

  </tr>';
  echo $html;
 */


    
?>