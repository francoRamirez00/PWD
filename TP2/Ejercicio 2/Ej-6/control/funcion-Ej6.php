<?php

if ($_GET) {
    $nombre= $_GET["nombre"] ;
    $apellido= $_GET["apellido"] ;
    $edad= $_GET["edad"] ;
    $dire = $_GET["direccion"];
    $estudio= $_GET["estudio"];
    $sexo= $_GET["sexo"];

    

    if ($_GET["deporte"] == null){
        $cont =0 ;
    }else{

        $cont = count($_GET["deporte"]);
    }
    /**$cont= 0;
    for ($i=0 ;$i < $deporte ; $i++){

        $cont = $cont +1 ;
      
    }*/

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

echo " deportes que practica: " . $cont;
