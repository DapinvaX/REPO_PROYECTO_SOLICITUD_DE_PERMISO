<?php

include_once '/CONFIGURACION/configuracion.init';


try {
    $con = new PDO("mysql:host=".SERVIDOR.";dbname=".BBDD, USUARIO, CLAVE);

    // Establecemos el modo de error de PDO para que salten excepciones

    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    // preparar y vincular parámetros

    $stmt = $con->prepare("INSERT INTO permisos (fechaIni, fechaFin, motivo, diaCompleto, concedido, fecha) VALUES (:fechaIni, :fechaFin, :motivo, :diaCompleto, :concedido, :fecha)");

    $stmt->bindParam(':fechaIni', $fechaIni);
    $stmt->bindParam(':fechaFin', $fechaFin);
    $stmt->bindParam(':motivo', $motivo);
    $stmt->bindParam(':diaCompleto', $diaCompleto);
    $stmt->bindParam(':concedido', $concedido);
    $stmt->bindParam(':fecha', $fecha);



    // establecemos los parámetros y ejecutamos para insertar

    $fechaIni = "";
    $fechaFin = "";
    $motivo = "";
    $diaCompleto = "";
    $concedido = "";
    $fecha = "";
   
    
    if (isset($_POST['fechaIni'])) {
        $fechaIni = $_POST['fechaIni'];
    }

    if (isset($_POST['fechaFin'])) {
        $fechaFin = $_POST['fechaFin'];
    }
    if (isset($_POST['motivo'])) {
        $motivo = $_POST['motivo'];
    }
    if (isset($_POST['diaCompleto'])) {
        $diaCompleto = $_POST['diaCompleto'];
    }

    if (isset($_POST['concedido'])) {
        $concedido = $_POST['concedido'];
    }

    if (isset($_POST['vida'])) {
        $fecha = $_POST['vida'];
    }



    $stmt->execute();

    echo "<center>";
    echo "<h1>";
    echo "Nuevas filas insertadas correctamente ENHORABUENA";
    echo "<h1/>";
    echo "<center/>";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$con = null;



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Datos</title>
</head>
<body>

<input type="button" value="Volver" id="myBtn">

<script>

var btn = document.getElementById('myBtn');
btn.addEventListener('click', function() {
  document.location.href = 'index.html';
});




</script>
    
</body>
</html>