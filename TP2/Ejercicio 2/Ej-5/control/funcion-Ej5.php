<?php

if ($_GET) {
    $nombre= $_GET["nombre"] ;
    $apellido= $_GET["apellido"] ;
    $edad= $_GET["edad"] ;
    $dire = $_GET["direccion"];
    $estudio= $_GET["estudio"];
    $sexo= $_GET["sexo"];

    if ($edad > 18){
        echo "la edad es mayor a 18  <br>" ;
    }else if($edad == 18){
        echo "la edad es igual a 18  <br>" ;
    }else if($edad < 18){
        echo "la edad es menor a 18 <br>" ;
    }
}else{
    echo "error";
}

echo "<br> Hola, yo soy " .$nombre ." ". $apellido. " tengo ". $edad . " años y vivo en ". $dire . "mis estudios son: ". $estudio . " y mi sexo es: ". $sexo ; 