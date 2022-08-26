<?php

$array= [
    'nombre' =>[ 'franco' , 'facundo'] ,
    'contraseña' => ['123456Fr', '567891Fr'],
    ] ;
if ($_POST) {
    $nombre= $_POST["nombre"] ;
    $contraseña= $_POST["contraseña"];
    
   
    
    
    

    function contraSegura(){
        
        $contraseña= $_POST["contraseña"];
        $nombre= $_POST["nombre"] ;
        $segura = true;

    if(strlen($contraseña) < 8){
        echo "La contraseña debe tener al menos 8 caracteres <br>";
        $segura= false;
     }
     if($contraseña == $nombre){
        echo "La contraseña no debe ser igual al nombre ingresado <br>";
        $segura= false;
     }
     if (!preg_match('`[a-z]`',$contraseña)){
        echo "La contraseña debe tener al menos una letra minúscula <br>";
        $segura= false;
     }
     if (!preg_match('`[A-Z]`',$contraseña)){
        echo "La contraseña debe tener al menos una letra mayúscula <br>";
        $segura= false;
     }
     if (!preg_match('`[0-9]`',$contraseña)){
        echo "La contraseña debe tener al menos un caracter numérico <br>";
        $segura= false;
     }
     
     
     return $segura;
    }

    
   

    $return= false ;
    $count = count($array) ;
    for($i=0 ; $i < $count ; $i++){


       
        if($array['nombre'][$i] == $nombre  ){

            echo "usuario encontrado <br>";
            if ( $array['contraseña'][$i] == $contraseña) {
                echo "usuario y contra encontrado <br>" ;

                $return = true;
            }
                
           
        }
} 

}


if ($return && contraSegura()) {
    echo "datos validados correctamente <br>contra segura";
    
}else {
    contraSegura();
    echo "error";
}

