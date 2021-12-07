

<?php

    require './vendor/autoload.php';


use Spipu\Html2Pdf\Html2Pdf;

//Recoger el contenido del fichero del anexo que contiene el html
try {
    ob_start();


    require 'permisoPDF.html';


    $html=ob_get_clean();

    //Creación del objeto
    $html2pdf=new Html2Pdf('P', 'A4', 'es', 'true', 'UTF-8');

    $html2pdf->writeHTML($html);

    $html2pdf->output();
} catch (Exception $ex) {
    echo $ex->getMessage();
}
