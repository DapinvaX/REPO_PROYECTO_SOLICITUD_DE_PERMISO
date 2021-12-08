<?php
ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);
include_once './dao/permisosDAO.php';
include_once './dao/profesorDAO.php';
include_once './dao/horarioDAO.php';




$auladiurno1="";
$auladiurno2="";
$auladiurno3="";
$auladiurno4="";
$auladiurno5="";
$auladiurno6="";

$grupodiurno1="";
$grupodiurno2="";
$grupodiurno3="";
$grupodiurno4="";
$grupodiurno5="";
$grupodiurno6="";



$aulanocturno1="";
$aulanocturno2="";
$aulanocturno3="";
$aulanocturno4="";
$aulanocturno5="";
$aulanocturno6="";

$gruponocturno1="";
$gruponocturno2="";
$gruponocturno3="";
$gruponocturno4="";
$gruponocturno5="";
$gruponocturno6="";








$dni="";
$nombre="";
$telefono="";
$firma="";
$asignatura="";


$fechaIni = "";
$fechaFin = "";
$motivo = "";
$diaCompleto = 0;
$concedido = "";
$fecha = "";



if (isset($_POST['dni'])) {
    $dni = $_POST['dni'];
}
if (isset($_POST['nombre'])) {
    $nombre = $_POST['nombre'];
}
if (isset($_POST['telefono'])) {
    $telefono = $_POST['telefono'];
}
if (isset($_POST['firma'])) {
    $firma = $_POST['firma'];
}
if (isset($_POST['asignatura'])) {
    $asignatura = $_POST['asignatura'];
}





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

if (isset($_POST['fecha'])) {
$fecha = $_POST['fecha'];
}



if (isset($_POST['auladiurno1'])) {
    $auladiurno1 = $_POST['auladiurno1'];
    }

if (isset($_POST['auladiurno2'])) {
    $auladiurno2 = $_POST['auladiurno2'];
    }

 if (isset($_POST['auladiurno3'])) {
        $auladiurno3 = $_POST['auladiurno3'];
        }
    
if (isset($_POST['auladiurno4'])) {
        $auladiurno4 = $_POST['auladiurno4'];
        }

if (isset($_POST['auladiurno5'])) {
            $auladiurno5 = $_POST['auladiurno5'];
            }
        
if (isset($_POST['auladiurno6'])) {
            $auladiurno6 = $_POST['auladiurno6'];
            }



if (isset($_POST['aulanocturno1'])) {
            $aulanocturno1 = $_POST['aulanocturno1'];
         }
            
if (isset($_POST['aulanocturno2'])) {
                $aulanocturno2 = $_POST['aulanocturno2'];
                }
            
             if (isset($_POST['aulanocturno3'])) {
                    $aulanocturno3 = $_POST['aulanocturno3'];
                    }
                
            if (isset($_POST['aulanocturno4'])) {
                    $aulanocturno4 = $_POST['aulanocturno4'];
                    }
            
            if (isset($_POST['aulanocturno5'])) {
                        $aulanocturno5 = $_POST['aulanocturno5'];
                        }
                    
            if (isset($_POST['aulanocturno6'])) {
                        $aulanocturno6 = $_POST['aulanocturno6'];
                        }


                        if (isset($_POST['grupodiurno1'])) {
                            $grupodiurno1 = $_POST['grupodiurno1'];
                            }
                        
                        if (isset($_POST['grupodiurno2'])) {
                            $grupodiurno2 = $_POST['grupodiurno2'];
                            }
                        
                         if (isset($_POST['grupodiurno3'])) {
                                $grupodiurno3 = $_POST['grupodiurno3'];
                                }
                            
                        if (isset($_POST['grupodiurno4'])) {
                                $grupodiurno4 = $_POST['grupodiurno4'];
                                }
                        
                        if (isset($_POST['grupodiurno5'])) {
                                    $grupodiurno5 = $_POST['grupodiurno5'];
                                    }
                                
                        if (isset($_POST['grupodiurno6'])) {
                                    $grupodiurno6 = $_POST['grupodiurno6'];
                                    }
                        
                        
                        
                                    if (isset($_POST['gruponocturno1'])) {
                                        $gruponocturno1 = $_POST['gruponocturno1'];
                                        }
                                    
                                    if (isset($_POST['gruponocturno2'])) {
                                        $gruponocturno2 = $_POST['gruponocturno2'];
                                        }
                                    
                                     if (isset($_POST['gruponocturno3'])) {
                                            $gruponocturno3 = $_POST['gruponocturno3'];
                                            }
                                        
                                    if (isset($_POST['gruponocturno4'])) {
                                            $gruponocturno4 = $_POST['gruponocturno4'];
                                            }
                                    
                                    if (isset($_POST['gruponocturno5'])) {
                                                $gruponocturno5 = $_POST['gruponocturno5'];
                                                }
                                            
                                    if (isset($_POST['gruponocturno6'])) {
                                                $gruponocturno6 = $_POST['gruponocturno6'];
                                                }

$idProfesor = insertarProfesor($dni,$nombre,$telefono,$firma,$asignatura);
$idPermiso = insertarPermiso($fechaIni,$fechaFin,$motivo,$diaCompleto,$concedido,$fecha,$idProfesor);
insertarHorario($idPermiso,$auladiurno1, $auladiurno2, $auladiurno3, $auladiurno4, $auladiurno5, $auladiurno6, $grupodiurno1, $grupodiurno2, $grupodiurno3, $grupodiurno4,$grupodiurno5, $grupodiurno6, $aulanocturno1, $aulanocturno2, $aulanocturno3, $aulanocturno4, $aulanocturno5, $aulanocturno6, $gruponocturno1, $gruponocturno2,$gruponocturno3,$gruponocturno4,$gruponocturno5,$gruponocturno6);


echo "Insercion Correcta";