Ejercicio 8
La empresa de Cine Cinem@s tiene establecidas diferentes tarifas para las entradas, en
función de la edad y de la condición de estudiante del cliente. Desea que sean los propios
clientes los que puedan calcular el valor de sus entradas a través de una página web. Si
es estudiante o menor de 12 años el precio es de $160, si es estudiante y mayor o igual
de 12 años el precio es de $180, en cualquier otro caso el precio es de $300. Diseñar un
formulario que solicite la edad y permita ingresar si se trata de un estudiante o no. Con
un botón enviar los datos a un script encargado de realizar el cálculo y visualizarlo.
Agregar un botón para limpiar el formulario y volver a consultar.


<html>
<head>
<title>ejercicio 8</title>
</head>
<script type="text/javascript">


    function tarifa(){
        var edad = document.getElementById('edad').value;
        var esEstudiante= document.getElementById('si').checked;
        var noEstudiante= document.getElementById('no').checked; 
      
        var costo = 0 ;

        console.log(esEstudiante , edad)
   
        


        if (esEstudiante  ) {
            
            alert("entro estudiante")
            

            if( edad < 12){
           
            
            alert("entro menor12")
            costo= 160 ;
            } else if(edad >= 12){
            
            
            alert("entro mayor 12 ")
            costo= 180 ;
            }


        
        }else{
            
            
            alert("entro 4")
            costo= 300 ;
        }


         document.getElementById("total").innerHTML = costo ;

      
    }

    

</script>

<body>
<form
method="POST"  onSubmit="return tarifa()"> 

edad: <input name= "edad" id="edad" type='number'/> <br />

estudiante : <br> 
Si  <input name="estudio" id="si" type="radio" value="si"/> <br />
No <input name="estudio" id="no" type="radio" value="no" /><br />



    tarifa : $ <div id="total"> </div>
<br> 


<input type="submit" value="Calcular" />  <br />
</form>
</body>
</html>