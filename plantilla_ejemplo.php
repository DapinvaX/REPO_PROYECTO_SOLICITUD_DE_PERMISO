<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Título del documento</title>
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
            <div class="row">
                <div class="col-md-12" style="text-align: center;">
                    <h1 id="titulo">FORMULARIO DE SOLICITUD</h1>
                </div>
            </div>
            <form>
                <div class="row">


                    
                        <div class="col-md-6">
                            <div class="input-field col s12 l6">
                                    <input type="text" id="primer_nombre" class="validate">
                                    <label for="primer_nombre">Primer Nombre</label>
                            </div>
                        </div>    
                        
                        <div class="col-md-6">    
                            <div class="input-field col s12 l6">
                                <input type="text" id="segundo_nombre" class="validate">
                                <label for="segundo_nombre">Segundo Nombre</label>
                            </div>
                        </div>


                </div>



                <div class="row">


                    <div class="col-md-6">
                        
                        <div class="input-field col s6">
                            <input type="email" id="email" class="validate">
                            <label for="email" data-error="Correo Inválido" data-success="Correcto">Email</label>
                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="input-field col s6">
                            <textarea id="mensaje" class="materialize-textarea"></textarea>
                            <label for="mensaje">Mensaje</label>
                        </div>
                    
                    </div>



                </div>
                
                <div class="row">

                    <div class="col-md-4">
                        <button class="btn waves-effect waves-light blue" type="submit" name="action">Enviar
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4"></div>

                </div>

                        
            </div>


            </div>
        </form>
    </div>


</body>
</html>