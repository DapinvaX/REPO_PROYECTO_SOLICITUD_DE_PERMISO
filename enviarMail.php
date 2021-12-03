<?php
//Dump de errores en el navegador
ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);

?>

<?php

/**

* Mandar un correo vía SMTP con autentificación

*/

//Importar la clase PHPMailer deltro del namespace global

use PHPMailer\PHPMailer\PHPMailer;

use PHPMailer\PHPMailer\SMTP;

//SMTP necesita horas precisas, y se DEBE configurar la zona horaria de PHP

// Esto debe hacerse en su php.ini, pero así es como se hace si no tiene acceso a eso

date_default_timezone_set('Etc/UTC');


//Crear nueva instancia de PHPMailer

require './vendor/phpmailer/phpmailer/src/Exception.php';

require './vendor/phpmailer/phpmailer/src/PHPMailer.php';

require './vendor/phpmailer/phpmailer/src//SMTP.php';

$mail = new PHPMailer();

//Decirmos a PHPMailer que use SMTP

$mail->isSMTP();

//Se habilita el debbug de SMTP

// SMTP::DEBUG_OFF = desactivado (para uso en producción)

// SMTP::DEBUG_CLIENT = mensajes del cliente

// SMTP::DEBUG_SERVER = mensajes del cliente y servidor

$mail->SMTPDebug = SMTP::DEBUG_OFF;

//Indicamos el  hostname del servidor de email

$mail->Host = 'mail.pissmail.com';

//Indicamos el puerto SMTP  - puede ser 25, 465 o  587

$mail->Port = 465;

//Indicamos si usamos autentificación SMTP

$mail->SMTPAuth = true;

//Nombre de usaurio para la autentificación SMTP

$mail->Username = 'proyectodaw@dmc.chat';

//Password para la autentificación SMTP

$mail->Password = 'ProyectoDaw1234';

//La dirección y nombre del emisor

$mail->setFrom('proyectodaw@dmc.chat', 'Administrador');

//La dirección y nombre del receptor

$mail->addAddress('agolteanu01@educarex.es');

//Asunto

$mail->Subject = 'Estado del permiso';

$mail->MsgHTML('Estado del permiso');

$mail->Body = "Tu permiso se ha generado correctamente, que te aproveche."; // Mensaje a enviar


//Adjuntar una imagen
//$mail->addAttachment('images/una_imagen.png');


//ENVIAR EL EMAIL, compronbando si hay errores.

if (!$mail->send()) {
    echo 'Error en el envío: ' . $mail->ErrorInfo;
} else {
    echo 'El email ha sido enviado correctamente.';
}