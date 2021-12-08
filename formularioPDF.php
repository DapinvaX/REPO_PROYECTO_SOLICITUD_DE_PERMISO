<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Solicitud de Permiso</title>
        <link rel="stylesheet" href="/css/estilo.css">
    </head>

    <body>
        <div class="contenedor">
            <div class="header">
            <div class="nav">
                    <img src="img/logo.jpeg">
                </div>
            </div>
           <br>
            <div class="main">
               <br>
                     <label  for="nombre">Don/Doña: _______________________________________________
                    </label>
                  

                    <label for="dni">con D.N.I.: ________________</label>
                   <br><br>

                    <label for="telefono">y teléfono de contacto: ____________________</label>
                   

                    <label for="profesor">      Profesor/a de:_____________________</label>
                  <br>  <br>
                    <label>en el IES Augustóbriga de Navalmoral de la Mata. </label><br><br>

                    <label for="solicitud"><b><u>SOLICITA:</u></b> conforme al artículo 70 de la ley de funcionarios civiles del estado, le sea
                        concedido un permiso para el/los día/s____________________por los motivos justificados  
                        que se indican a continuación: _______________________________________________________________________________</label>
                    

                    <p>
                        <div class="dia">
                            <input type="checkbox" id="opt1" name="Dia" value="completo" class="dia">
                            <label for="opt1">Día completo (No es necesario cumplimentar la tabla)<br><br></label>
                            <input type="checkbox" id="opt2" name="Dia" value="nocompleto" class="dia">
                            <label for="opt2">Día no completo (Es necesaria la cumplimentación de la tabla)<br>Horas
                                                            lectivas y grupos afectados</label>
                        </div>
                    </p>

                    <br>

                   <div class="contenedorTabla">

                   <div class="tabla1">
                    <table border="1px solid black"  id="tabla1">
                       
                        <tr>
                            <th>Hora</th>
                            <th>GRUPO</th>
                            <th>AULA</th>
                            
                        </tr>
                        <tr>
                            <th>1ª</th>
                            <th>
                                <label for="grupo"></label><input type="text" id="grupo" name="grupo1" size="40"></th>
                            <th>
                                <label for="aula"></label><input type="text" id="aula" name="aula1"></th>
                        </tr>
                        <tr>
                            <th>2ª</th>
                            <th>
                                <label for="grupo"></label><input type="text" id="grupo" name="grupo2" size="40"></th>
                            <th>
                                <label for="aula"></label><input type="text" id="aula" name="aula2"></th>
                        </tr>
                        <tr>
                            <th>3ª</th>
                            <th>
                                <label for="grupo"></label><input type="text" id="grupo" name="grupo3" size="40"></th>
                            <th>
                                <label for="aula"></label><input type="text" id="aula" name="aula3"></th>
                        </tr>
                        <tr>
                            <th>4ª</th>
                            <th>
                                <label for="grupo"></label><input type="text" id="grupo" name="grupo4" size="40"></th>
                            <th>
                                <label for="aula"></label><input type="text" id="aula" name="aula4"></th>
                        </tr>
                        <tr>
                            <th>5ª</th>
                            <th>
                                <label for="grupo"></label><input type="text" id="grupo" name="grupo5" size="40"></th>
                            <th>
                                <label for="aula"></label><input type="text" id="aula" name="aula5"></th>
                        </tr>
                        <tr>
                            <th>6ª</th>
                            <th>
                                <label for="grupo"></label><input type="text" id="grupo" name="grupo6" size="40"></th>
                            <th>
                                <label for="aula"></label><input type="text" id="aula" name="aula6"></th>
                        </tr>
                    </table>
                  <br>
                   </div>
                  <div class="tabla2">
                                        <table border="1px solid black" id="tabla2">
                            
                        <tr>
                            <th>Hora</th>
                            <th>GRUPO</th>
                            <th>AULA</th>
                            
                        </tr>
                        <tr>
                            <th>1ª</th>
                            <th>
                                <label for="grupo"></label><input type="text" id="grupo" name="grupo1" size="40"></th>
                            <th>
                                <label for="aula"></label><input type="text" id="aula" name="aula1"></th>
                        </tr>
                        <tr>
                            <th>2ª</th>
                            <th>
                                <label for="grupo"></label><input type="text" id="grupo" name="grupo2" size="40"></th>
                            <th>
                                <label for="aula"></label><input type="text" id="aula" name="aula2"></th>
                        </tr>
                        <tr>
                            <th>3ª</th>
                            <th>
                                <label for="grupo"></label><input type="text" id="grupo" name="grupo3" size="40"></th>
                            <th>
                                <label for="aula"></label><input type="text" id="aula" name="aula3"></th>
                        </tr>
                        <tr>
                            <th>4ª</th>
                            <th>
                                <label for="grupo"></label><input type="text" id="grupo" name="grupo4" size="40"></th>
                            <th>
                                <label for="aula"></label><input type="text" id="aula" name="aula4"></th>
                        </tr>
                        <tr>
                            <th>5ª</th>
                            <th>
                                <label for="grupo"></label><input type="text" id="grupo" name="grupo5" size="40"></th>
                            <th>
                                <label for="aula"></label><input type="text" id="aula" name="aula5"></th>
                        </tr>
                        <tr>
                            <th>6ª</th>
                            <th>
                                <label for="grupo"></label><input type="text" id="grupo" name="grupo6" size="40"></th>
                            <th>
                                <label for="aula"></label><input type="text" id="aula" name="aula6"></th>
                        </tr>
                    </table>
                    
                    </div>
                    </div>

                    <br><br><br>

                    <label for="fecha">Navalmoral de la Mata a _________________de_____________de 202____________.
                        <input type="date" id="FechaEntrega" name="FechaEntrega">
                    </label>
                    <br>
                    <br>
                    

                    <br>
                    
                    
                    <label for="firma">Firma del Solicitante</label><br>
                    Fdo:___________________________ <br> <br>
                    
                    <label for="firma">Firma de la Directora</label><br>
                    Fdo: Marta Victor Vega
                   

                    <br><br>
                    <fieldset>
                        <label class="decision">
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            <input type="checkbox" id="Denegado" name="resolucion" value="denegado" class="decision">
                            DENEGADO
                        </label>
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        <label class="decision">
                            <input type="checkbox" id="Concedido" name="resolucion" value="concedido" class="decision">
                            CONCEDIDO
                        </label>
                    </fieldset><br><br>

                    <label for="motivos">
                        Se adjuntan como constancia justificativa los siguientes documentos:
                            _____________________________________________________________
                           
                        <input type="file" name="file" id="Constancia">
                    </label>

                    <br><br>
                    <p>
                        <pre>
                         Delegación Provincial de Educación Cáceres</pre>
                    </p>
                    <br><br>
                    
                
            </div>
        </div>
    </body>

</html>
