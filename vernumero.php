<?php

if ($_POST) {
    $numero= $_POST['num'];
    if ($numero <0) {
        $resp= "negativo";
    }elseif ($numero ==0) {
        $resp= "es cero";
    }else {
        $resp="positivo";
    }
}else{
    echo "error";
}

echo "numero es: ". $resp;