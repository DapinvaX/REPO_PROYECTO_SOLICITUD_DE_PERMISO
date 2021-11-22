<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Solicitud de Permiso</title>
  <!-- CDN de los íconos -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- CDN Materialize CSS  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <!-- Estilos propios -->
  <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <div class="container">

        <!-- TÍTULOS -->
        <div class="row">
        <h3 class="header left teal-text">SOLICITUD DE PERMISO</h3>
        </div>
        <div class="row">
        <h5 class="header left teal-text">Solicitar un permiso de ausencia</h5>
        </div>
        
        <form class="col s12" action="funcionalidad.php" >
            
            <!-- CAMPOS INPUT TEXT -->
            <div class="row">
                <div class="input-field col s6">
                <input  id="first_name" type="text" class="validate">
                <label for="first_name">Nombre</label>
                </div>
                <div class="input-field col s6">
                <input id="last_name" type="text" class="validate">
                <label for="last_name">Apellidos</label>
                </div>
            </div>
            
            <!-- CAMPOS TEXTAREA -->
                <div class="row">
                <div class="input-field col s12">
                    <textarea id="address" class="materialize-textarea"></textarea>
                    <label for="address">Observaciones</label>
                </div>
                
                </div>
                <!-- CAMPOS FECHA -->
                <div class="row">
                <div class="input-field col s6">
                    
                <input type = "date" class = "datepicker" id="fInicio"/>
                <label>Fecha Inicio</label>        
                </div>  
                <div class="input-field col s6">
                            
                <input type = "date" class = "datepicker" id="fFinal"/>
                <label>Fecha Fin</label> 
                </div>  
                </div>
                <!-- CAMPOS CHECKBOX -->
                <div class="row">
                <p>
                <label>
                    <input type="checkbox" id="opcA"/>
                    <span>Opción A</span>
                </label>
                <label>
                    <input type="checkbox" id="opcB"/>
                    <span>Opción B</span>
                </label>
                <label>
                    <input type="checkbox" id="opcC"/>
                    <span>Opción C</span>
                </label>
                </p>

            </div>
            <!-- CAMPOS RADIOBUTTONS -->
            <div class="row">
                <p>
                <p>
                    <label>
                        <input name="group1" type="radio" id="opc1" checked/>
                        <span>Opción 1</span>
                    </label>
                
                    <label>
                        <input name="group1" type="radio" id="opc2"/>
                        <span>Opción 2</span>
                    </label>
                    </p>
                </p>
            </div>

            <!-- CAMPOS SELECT -->
                <div class = "row">
                <label>Opciones</label>
                    <select id="SelFruta">
                        <option value = "" disabled selected>Seleccione una fruta</option>
                        <option value = "1">Mango</option>
                        <option value = "2">Naranja</option>
                        <option value = "3">Manzana</option>
                    </select>               
                </div>

                <!-- BOTON -->
            <div class = "row">
               <!-- <a class="waves-effect waves-light btn" type="submit">Aceptar</a> -->
                <button type="submit" class="waves-effect waves-light btn">Aceptar</button>
            </div>
            </form>

            <!-- TABLA -->   
                <div class = "row">
                <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Edad</th>
                    </tr>
                </thead>
        
                <tbody>
                    <tr>
                    <td>Alvin</td>
                    <td>Eclair</td>
                    <td>34</td>
                    <td>  <a class="waves-effect waves-light btn  teal lighten-3">Ver</a></td>
                    <td>  <a class="waves-effect waves-light btn">Editar</a></td>
                    <td>  <a class="waves-effect waves-light btn red lighten-2">Eliminar</a></td>
                    </tr>
                    <tr>
                    <td>Alan</td>
                    <td>Jellybean</td>
                    <td>21</td>
                    <td>  <a class="waves-effect waves-light btn  teal lighten-3">Ver</a></td>
                    <td>  <a class="waves-effect waves-light btn">Editar</a></td>
                    <td>  <a class="waves-effect waves-light btn red lighten-2">Eliminar</a></td>
                    </tr>
                    <tr>
                    <td>Jonathan</td>
                    <td>Lollipop</td>
                    <td>56</td>
                    <td>  <a class="waves-effect waves-light btn  teal lighten-3">Ver</a></td>
                    <td>  <a class="waves-effect waves-light btn">Editar</a></td>
                    <td>  <a class="waves-effect waves-light btn red lighten-2">Eliminar</a></td>
                    </tr>
                </tbody>
                </table>
            </div>
            

                <!-- PIE DE PÁGINA -->
            <footer class="page-footer teal lighten-2">
                <div class="row">
                <div class="col s12 m6 l6">
                    <h5 class="white-text">Aplicación</h5>
                </div>
                
                </div>
                
            </footer>
            </div>


    </div>

</body>

</html>