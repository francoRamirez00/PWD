<?php

$array=[];
if ($_GET) {
    $jueves= $_GET['jueves'];
    $viernes= $_GET['viernes'];
    
    $horasSuma= $jueves+$viernes;
    array_push($array, $jueves,$viernes);
    print_r($array);

}else{
    echo "error";
}

echo "total de horas: ". $horasSuma;