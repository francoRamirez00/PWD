<?php

if ($_GET) {
    $num1= $_GET["num1"] ;
    $num2= $_GET["num2"] ;
    $operacion= $_GET["operacion"] ;
    
    if($operacion == "suma"){
    $resultado = $num1 + $num2 ;
    } elseif($operacion == "resta"){
    $resultado = $num1 - $num2 ;
    } elseif($operacion == "multiplicacion"){

    $resultado = $num1 * $num2 ;
    }
}else{
    echo "error";
}

echo "<br> ". $operacion. " ". $num1 . " ". $num2. " resultado = ".$resultado ; 