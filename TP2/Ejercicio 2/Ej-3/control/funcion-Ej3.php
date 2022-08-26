

<?php

if ($_POST) {
    $nombre= $_POST["nombre"] ;
    $apellido= $_POST["apellido"] ;
    $edad= $_POST["edad"] ;
    $dire = $_POST["direccion"];
}else{
    echo "error";
}

echo "Hola, yo soy " .$nombre ." ". $apellido. " tengo ". $edad . " años y vivo en ". $dire ; 