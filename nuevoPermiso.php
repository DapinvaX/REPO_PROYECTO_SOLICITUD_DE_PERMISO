<?php
//Dump de errores en el navegador
ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <title>Nuevo Permiso</title>
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

        <form class="col s12" action="funcionalidad.php">

            <!-- CAMPOS INPUT TEXT -->
            <div class="row">
                <div class="input-field col s6">
                    <input id="first&second" type="text" class="validate">
                    <label for="first&second_name">Nombre y Apellidos</label>
                </div>
                <div class="input-field col s3">
                    <input id="dni" type="text" class="validate">
                    <label for="dni">DNI</label>
                </div>
                <div class="input-field col s6">
                    <input id="tlf" type="text" class="validate">
                    <label for="tlf">Telefono de Contacto</label>
                </div>
                <div class="input-field col s4">
                    <input id="asignatura" type="text" class="validate">
                    <label for="asignatura">Profesor de</label>
                </div>
            </div>

            <!-- CAMPOS TEXTAREA -->

            <div class="row">
                <div class="input-field col s6">

                    Fecha Inicio
                    <input type="date" class="datepicker" id="fInicio" />

                </div>
                <div class="input-field col s6">

                    Fecha Fin
                    <input type="date" class="datepicker" id="fFinal" />

                </div>
            </div>

            <div class="row">
                <div class="input-field col s6">
                    <textarea id="motivos" class="materialize-textarea"></textarea>
                    <label for="motivos">Motivos</label>
                </div>

            </div>

            <!-- CAMPOS CHECKBOX -->
            <div class="row">
                <p>
                    <label>
                        <input type="checkbox" name="check" id="opcA" />
                        <span>Dia completo</span>
                    </label>


                </p>

            </div>
           
            <!-- TABLA -->
            
            <div class="row">
                <table>
                    <thead>
                    <tr>
                            <th colspan="3">DIURNO</th>
                            <th  colspan="3">NOCTURNO</th>
                            
                        </tr>
                        <tr>
                            <th>Hora</th>
                            <th>Grupo</th>
                            <th>Aula</th>
                            <th>Hora</th>
                            <th>Grupo</th>
                            <th>Aula</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td >1º</td>
                            <td> <select id="grupodiurno1" name="grupo1">
                                    <option value="" disabled selected>Seleccione un grupo</option>
                                    <option value="1">1º DAM/DAW</option>
                                    <option value="2">2º DAM</option>
                                    <option value="3">2º DAW</option>
                                </select></td>
                            <td><input id="aula1" name="aula1" type="text" class="validate"></td>

                            <td >1º</td>
                            <td> <select id="gruponocturno1" name="gruponocturno1">
                                    <option value="" disabled selected>Seleccione un grupo</option>
                                    <option value="1">ASIR</option>
                                    <option value="2">DAW</option>
                                    <option value="3">DAM</option>
                                </select></td>
                            <td><input id="aula1" name="aula1" type="text" class="validate"></td>
                           
                        </tr>
                        <tr>
                            <td>2º</td>
                            <td><select id="grupodiurno2" name="grupo2">
                                    <option value="" disabled selected>Seleccione un grupo</option>
                                    <option value="1">ASIR</option>
                                    <option value="2">DAW</option>
                                    <option value="3">DAM</option>
                                </select></td>
                            <td><input id="aula2" name="aula2" type="text" class="validate"></td>

                            <td>2º</td>
                            <td><select id="gruponocturno2" name="gruponocturno2">
                                    <option value="" disabled selected>Seleccione un grupo</option>
                                    <option value="1">ASIR</option>
                                    <option value="2">DAW</option>
                                    <option value="3">DAM</option>
                                </select></td>
                            <td><input id="aula2" name="aula2" type="text" class="validate"></td>
                            
                        </tr>
                        <tr>
                            <td>3º</td>
                            <td><select id="grupodiurno3" name="grupo3">
                                    <option value="" disabled selected>Seleccione un grupo</option>
                                    <option value="1">ASIR</option>
                                    <option value="2">DAW</option>
                                    <option value="3">DAM</option>
                                </select></td>
                            <td><input id="aula3" name="aula3" type="text" class="validate"></td>
                            <td>3º</td>
                            <td><select id="gruponocturno3" name="gruponocturno3">
                                    <option value="" disabled selected>Seleccione un grupo</option>
                                    <option value="1">ASIR</option>
                                    <option value="2">DAW</option>
                                    <option value="3">DAM</option>
                                </select></td>
                            <td><input id="aula3" name="aula3" type="text" class="validate"></td>
                            
                        </tr>
                        <tr>
                            <td>4º</td>
                            <td> <select id="grupodiurno4" name="grupo4">
                                    <option value="" disabled selected>Seleccione un grupo</option>
                                    <option value="1">ASIR</option>
                                    <option value="2">DAW</option>
                                    <option value="3">DAM</option>
                                </select></td>
                            <td><input id="aula1" name="aula1" type="text" class="validate"></td>
                            <td>4º</td>
                            <td> <select id="gruponocturno4" name="gruponocturno4">
                                    <option value="" disabled selected>Seleccione un grupo</option>
                                    <option value="1">ASIR</option>
                                    <option value="2">DAW</option>
                                    <option value="3">DAM</option>
                                </select></td>
                            <td><input id="aula1" name="aula1" type="text" class="validate"></td>
                           
                        </tr>
                        <tr>
                            <td>5º</td>
                            <td> <select id="grupodiurno5" name="grupo5">
                                    <option value="" disabled selected>Seleccione un grupo</option>
                                    <option value="1">ASIR</option>
                                    <option value="2">DAW</option>
                                    <option value="3">DAM</option>
                                </select></td>
                            <td><input id="aula1" name="aula1" type="text" class="validate"></td>
                            <td>6º</td>
                            <td> <select id="gruponocturno5" name="gruponocturno5">
                                    <option value="" disabled selected>Seleccione un grupo</option>
                                    <option value="1">ASIR</option>
                                    <option value="2">DAW</option>
                                    <option value="3">DAM</option>
                                </select></td>
                            <td><input id="aula1" name="aula1" type="text" class="validate"></td>
                           
                        </tr>
                        <tr>
                            <td>6º</td>
                            <td> <select id="grupodiurno6" name="grupo6">
                                    <option value="" disabled selected>Seleccione un grupo</option>
                                    <option value="1">ASIR</option>
                                    <option value="2">DAW</option>
                                    <option value="3">DAM</option>
                                </select></td>
                            <td><input id="aula1" name="aula1" type="text" class="validate"></td>
                            <td>6º</td>
                            <td> <select id="gruponocturno6" name="gruponocturno6">
                                    <option value="" disabled selected>Seleccione un grupo</option>
                                    <option value="1">ASIR</option>
                                    <option value="2">DAW</option>
                                    <option value="3">DAM</option>
                                </select></td>
                            <td><input id="aula1" name="aula1" type="text" class="validate"></td>
                            
                        </tr>
                    </tbody>
                </table>
            </div>
            <label>Nocturno</label>

            


            <div class="row">
                <!-- <a class="waves-effect waves-light btn" type="submit">Aceptar</a> -->
                <button type="submit" class="waves-effect waves-light btn">Guardar</button>
            </div>


            <div class="row">

                <div class="input-field col s6">
                    Fecha de solictud
                    <input id="fecha" type="date" class="validate">

                </div>
            </div>

            <div class="row">

                <div class="input-field col s3">
                    Firma del Solicitante
                    <input id="firma" type="text" class="validate">

                </div>

                <div class="input-field col s3">
                    Firma de la Directora
                    <input id="firma" type="text" class="validate">

                </div>

            </div>


            <div class="row">
                <p>
                    <label>
                        <input type="radio" name="check" id="opcA" />
                        <span>Denegado</span>
                    </label>

                    <label>
                        <input type="radio" name="check" id="opcb" />
                        <span>Concedido</span>
                    </label>


                </p>

            </div>

            <div class="row">

                <div class="input-field col s3">

                    Archivos adjuntos
                    <input type="file" name="adjunto" id="adjunto">



                </div>





            </div>




        </form>

        <!-- PIE DE PÁGINA -->
         <footer class="page-footer teal lighten-2">
            <div class="row">
                <div class="col s12 m6 l6">
                    <h5 class="white-text " style="align-content: center;">Delegación Provincial de Educación Cáceres</h5>
                </div>

            </div>

        </footer> 
    </div>


    

</body>

</html>

<script>
    //Evento para el select
    document.addEventListener('DOMContentLoaded', function () {
        var elems = document.querySelectorAll('select');
        var options = document.querySelectorAll('option');
        var instances = M.FormSelect.init(elems, options);
    })


    //Evento para los campos fecha
    document.addEventListener('DOMContentLoaded', function () {
        var elems = document.querySelectorAll('.datepicker');

    });
</script>